<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE' $MetadataOperation
 * @property string $Version
 */
class IcebergInput extends Shape
{
    /**
     * @param array{
     *     MetadataOperation: 'CREATE',
     *     Version?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
