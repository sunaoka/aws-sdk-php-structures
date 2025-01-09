<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceName
 * @property 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl' $SourceType
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceName?: string,
     *     SourceType?: 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl',
     *     Message?: string,
     *     Date?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
