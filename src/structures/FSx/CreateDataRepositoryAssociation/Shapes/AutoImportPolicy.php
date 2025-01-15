<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'NEW'|'CHANGED'|'DELETED'>|null $Events
 */
class AutoImportPolicy extends Shape
{
    /**
     * @param array{Events?: list<'NEW'|'CHANGED'|'DELETED'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
