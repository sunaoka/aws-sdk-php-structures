<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceName
 * @property 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl'|null $SourceType
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceName?: string|null,
     *     SourceType?: 'node'|'parameter-group'|'subnet-group'|'cluster'|'user'|'acl'|null,
     *     Message?: string|null,
     *     Date?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
