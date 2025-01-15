<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DefaultValue
 * @property string|null $Description
 * @property int|null $MaxConnections
 * @property string|null $Name
 * @property 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA'|null $Type
 */
class NodeInputPort extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string|null,
     *     Description?: string|null,
     *     MaxConnections?: int|null,
     *     Name?: string|null,
     *     Type?: 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
