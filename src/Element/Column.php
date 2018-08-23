<?php
/**
 * Desc
 *
 * @author Heiko Griga <h.griga@teilehaber.de>
 * @date   23.08.2018, 08:55
 */

namespace Siscrad\Tables\Element;

/**
 * Class Column
 * @package Siscrad\Tables\Element
 */
class Column extends Element
{

    public function render(): string
    {
        return '<td' . $this->getAttributes() . '>' . $this->getContent() . '</td>';
    }
    
}