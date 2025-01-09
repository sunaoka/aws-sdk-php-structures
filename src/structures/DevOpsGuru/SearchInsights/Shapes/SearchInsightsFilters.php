<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LOW'|'MEDIUM'|'HIGH'> $Severities
 * @property list<'ONGOING'|'CLOSED'> $Statuses
 * @property ResourceCollection $ResourceCollection
 * @property ServiceCollection $ServiceCollection
 */
class SearchInsightsFilters extends Shape
{
    /**
     * @param array{
     *     Severities?: list<'LOW'|'MEDIUM'|'HIGH'>,
     *     Statuses?: list<'ONGOING'|'CLOSED'>,
     *     ResourceCollection?: ResourceCollection,
     *     ServiceCollection?: ServiceCollection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
