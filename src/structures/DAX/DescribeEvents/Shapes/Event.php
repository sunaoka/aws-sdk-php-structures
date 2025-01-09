<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceName
 * @property 'CLUSTER'|'PARAMETER_GROUP'|'SUBNET_GROUP' $SourceType
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceName?: string,
     *     SourceType?: 'CLUSTER'|'PARAMETER_GROUP'|'SUBNET_GROUP',
     *     Message?: string,
     *     Date?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
