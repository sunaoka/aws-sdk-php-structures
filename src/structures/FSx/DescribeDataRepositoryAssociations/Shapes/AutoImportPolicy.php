<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'NEW'|'CHANGED'|'DELETED'> $Events
 */
class AutoImportPolicy extends Shape
{
    /**
     * @param array{Events?: list<'NEW'|'CHANGED'|'DELETED'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
