<?php
/**
 * Desc
 *
 * @author Heiko Griga <h.griga@teilehaber.de>
 * @date   23.08.2018, 09:18
 */

namespace Siscrad\Tables\Element;

/**
 * Class Table
 * @package Siscrad\Tables\Element
 */
class Table extends Element
{
    
    public function render(): string
    {
        return '<table' . $this->getAttributes() . '>' . $this->getContent() . '</table>';
    }
    
}