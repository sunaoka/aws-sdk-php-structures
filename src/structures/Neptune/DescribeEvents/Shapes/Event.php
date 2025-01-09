<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIdentifier
 * @property 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot' $SourceType
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
     *     SourceType?: 'db-instance'|'db-parameter-group'|'db-security-group'|'db-snapshot'|'db-cluster'|'db-cluster-snapshot',
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
