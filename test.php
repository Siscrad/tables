<?php
/**
 * Desc
 *
 * @author Heiko Griga
 * @date   22.08.2018, 12:28
 */


$tableData = [
    'id' => 'idTable',
    'class' => 'classTable',
    'rows' => [
        [
            'id' => 'idRow1',
            'class' => 'classRow1',
            'columns' => [
                [
                    'id' => 'idCol1',
                    'class' => 'classCol1',
                    'content' => 'contentCol1'
                ],
                [
                    'id' => 'idCol2',
                    'class' => 'classCol2',
                    'content' => 'contentCol2'
                ]
            ]
        ],
        [
            'id' => 'idRow2',
            'class' => 'classRow2',
            'columns' => [
                [
                    'id' => 'idCol3',
                    'class' => 'classCol3',
                    'content' => 'contentCol3'
                ],
                [
                    'id' => 'idCol4',
                    'class' => 'classCol4',
                    'content' => 'contentCol4'
                ]
            ]
        ]
    ]
];

$table = new \Siscrad\Tables\Element\Table();
$table->setId($tableData['id']);
$table->setClass($tableData['class']);

$rows = [];
foreach ($tableData['rows'] as $idRow => $rowData) {
    $row = new \Siscrad\Tables\Element\Row();
    $row->setId($rowData['id']);
    $row->setClass($rowData['class']);
    $columns = [];
    foreach ($rowData['columns'] as $idColumn => $columnData) {
        $column = new \Siscrad\Tables\Element\Column();
        $column->setId($columnData['id']);
        $column->setClass($columnData['class']);
        $column->setContent($columnData['content']);
        $columns[] = $column->render();
    }
    $row->setContent(implode('', $columns));
    $rows[] = $row->render();
}

$table->setContent(implode('', $rows));
echo $table->render();
