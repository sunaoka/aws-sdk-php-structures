<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIdentifier
 * @property 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot'|'custom-engine-version'|'db-proxy'|'blue-green-deployment' $SourceType
 * @property string $Message
 * @property list<string> $EventCategories
 * @property \Aws\Api\DateTimeResult $Date
 * @property string $SourceArn
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string,
     *     SourceType?: 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot'|'custom-engine-version'|'db-proxy'|'blue-green-deployment',
     *     Message?: string,
     *     EventCategories?: list<string>,
     *     Date?: \Aws\Api\DateTimeResult,
     *     SourceArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
