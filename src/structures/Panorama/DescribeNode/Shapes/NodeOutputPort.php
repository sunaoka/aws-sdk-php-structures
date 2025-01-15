<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property string|null $Name
 * @property 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA'|null $Type
 */
class NodeOutputPort extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name?: string|null,
     *     Type?: 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
