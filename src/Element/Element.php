<?php
/**
 * Desc
 *
 * @author Heiko Griga <h.griga@teilehaber.de>
 * @date   23.08.2018, 08:52
 */

namespace Siscrad\Tables\Element;

/**
 * Class Element
 * @package Siscrad\Tables\Element
 */
abstract class Element
{
    
    /**
     * @var string $id
     */
    private $id = '';
    
    /**
     * @var string $class
     */
    private $class = '';
    
    /**
     * @var string $content
     */
    private $content;
    
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    
    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }
    
    /**
     * @param string $class
     */
    public function setClass(string $class): void
    {
        $this->class = $class;
    }
    
    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
    
    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
    
    protected function getAttributes(): string
    {
        $attributes = [];
        
        if (!empty($this->getId())) {
            $attributes[] = 'id="' . $this->getId() . '"';
        }
    
        if (!empty($this->getClass())) {
            $attributes[] = 'class="' . $this->getClass() . '"';
        }
        
        if (empty($attributes)) {
            return '';
        }
        
        return ' ' . implode(' ', $attributes);
    }
    
    abstract public function render(): string;
}