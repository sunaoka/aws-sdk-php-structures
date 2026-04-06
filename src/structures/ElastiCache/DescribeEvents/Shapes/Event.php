<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIdentifier
 * @property 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group'|null $SourceType
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string|null,
     *     SourceType?: 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group'|null,
     *     Message?: string|null,
     *     Date?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
