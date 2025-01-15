<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE' $MetadataOperation
 * @property string|null $Version
 */
class IcebergInput extends Shape
{
    /**
     * @param array{
     *     MetadataOperation: 'CREATE',
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
