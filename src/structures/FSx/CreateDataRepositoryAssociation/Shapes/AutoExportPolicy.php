<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'NEW'|'CHANGED'|'DELETED'> $Events
 */
class AutoExportPolicy extends Shape
{
    /**
     * @param array{Events?: list<'NEW'|'CHANGED'|'DELETED'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
