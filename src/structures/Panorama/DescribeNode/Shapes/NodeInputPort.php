<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DefaultValue
 * @property string $Description
 * @property int $MaxConnections
 * @property string $Name
 * @property 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA' $Type
 */
class NodeInputPort extends Shape
{
    /**
     * @param array{
     *     DefaultValue?: string,
     *     Description?: string,
     *     MaxConnections?: int,
     *     Name?: string,
     *     Type?: 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
