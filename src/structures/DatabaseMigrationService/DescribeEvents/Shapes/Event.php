<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIdentifier
 * @property 'replication-instance'|null $SourceType
 * @property string|null $Message
 * @property list<string>|null $EventCategories
 * @property \Aws\Api\DateTimeResult|null $Date
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string|null,
     *     SourceType?: 'replication-instance'|null,
     *     Message?: string|null,
     *     EventCategories?: list<string>|null,
     *     Date?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
