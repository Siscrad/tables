<?php
/**
 * Desc
 *
 * @author Heiko Griga
 * @date   23.08.2018, 08:55
 */

namespace Siscrad\Tables\Element;

/**
 * Class Row
 * @package Siscrad\Tables\Element
 */
class Row extends Element
{

    public function render(): string
    {
        return '<tr' . $this->getAttributes() . '>' . $this->getContent() . '</tr>';
    }
    
}