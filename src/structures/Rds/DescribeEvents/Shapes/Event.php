<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIdentifier
 * @property 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot'|'custom-engine-version'|'db-proxy'|'blue-green-deployment'|'db-shard-group'|'zero-etl'|null $SourceType
 * @property string|null $Message
 * @property list<string>|null $EventCategories
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property string|null $SourceArn
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string|null,
     *     SourceType?: 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot'|'custom-engine-version'|'db-proxy'|'blue-green-deployment'|'db-shard-group'|'zero-etl'|null,
     *     Message?: string|null,
     *     EventCategories?: list<string>|null,
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     SourceArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
