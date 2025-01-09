<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIdentifier
 * @property 'replication-instance' $SourceType
 * @property string $Message
 * @property list<string> $EventCategories
 * @property \Aws\Api\DateTimeResult $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string,
     *     SourceType?: 'replication-instance',
     *     Message?: string,
     *     EventCategories?: list<string>,
     *     Date?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
