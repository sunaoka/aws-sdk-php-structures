<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property string $Name
 * @property 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA' $Type
 */
class NodeOutputPort extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     Name?: string,
     *     Type?: 'BOOLEAN'|'STRING'|'INT32'|'FLOAT32'|'MEDIA'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
