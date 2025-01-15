<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'LOW'|'MEDIUM'|'HIGH'>|null $Severities
 * @property list<'ONGOING'|'CLOSED'>|null $Statuses
 * @property ResourceCollection|null $ResourceCollection
 * @property ServiceCollection|null $ServiceCollection
 */
class SearchInsightsFilters extends Shape
{
    /**
     * @param array{
     *     Severities?: list<'LOW'|'MEDIUM'|'HIGH'>|null,
     *     Statuses?: list<'ONGOING'|'CLOSED'>|null,
     *     ResourceCollection?: ResourceCollection|null,
     *     ServiceCollection?: ServiceCollection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
