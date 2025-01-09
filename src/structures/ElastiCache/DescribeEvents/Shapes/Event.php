<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIdentifier
 * @property 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group' $SourceType
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string,
     *     SourceType?: 'cache-cluster'|'cache-parameter-group'|'cache-security-group'|'cache-subnet-group'|'replication-group'|'serverless-cache'|'serverless-cache-snapshot'|'user'|'user-group',
     *     Message?: string,
     *     Date?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
