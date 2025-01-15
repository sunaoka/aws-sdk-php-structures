<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceName
 * @property 'CLUSTER'|'PARAMETER_GROUP'|'SUBNET_GROUP'|null $SourceType
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceName?: string|null,
     *     SourceType?: 'CLUSTER'|'PARAMETER_GROUP'|'SUBNET_GROUP'|null,
     *     Message?: string|null,
     *     Date?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
