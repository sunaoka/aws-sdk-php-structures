<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eventArns
 * @property list<string>|null $entityArns
 * @property list<string>|null $entityValues
 * @property list<DateTimeRange>|null $lastUpdatedTimes
 * @property list<array<string, string>>|null $tags
 * @property list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'>|null $statusCodes
 */
class EntityFilter extends Shape
{
    /**
     * @param array{
     *     eventArns: list<string>,
     *     entityArns?: list<string>|null,
     *     entityValues?: list<string>|null,
     *     lastUpdatedTimes?: list<DateTimeRange>|null,
     *     tags?: list<array<string, string>>|null,
     *     statusCodes?: list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
