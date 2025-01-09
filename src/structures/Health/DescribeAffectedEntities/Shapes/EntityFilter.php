<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $eventArns
 * @property list<string> $entityArns
 * @property list<string> $entityValues
 * @property list<DateTimeRange> $lastUpdatedTimes
 * @property list<array<string, string>> $tags
 * @property list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'> $statusCodes
 */
class EntityFilter extends Shape
{
    /**
     * @param array{
     *     eventArns: list<string>,
     *     entityArns?: list<string>,
     *     entityValues?: list<string>,
     *     lastUpdatedTimes?: list<DateTimeRange>,
     *     tags?: list<array<string, string>>,
     *     statusCodes?: list<'IMPAIRED'|'UNIMPAIRED'|'UNKNOWN'|'PENDING'|'RESOLVED'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
