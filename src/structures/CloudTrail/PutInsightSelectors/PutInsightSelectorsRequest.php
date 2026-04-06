<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutInsightSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TrailName
 * @property list<Shapes\InsightSelector> $InsightSelectors
 * @property string|null $EventDataStore
 * @property string|null $InsightsDestination
 */
class PutInsightSelectorsRequest extends Request
{
    /**
     * @param array{
     *     TrailName?: string|null,
     *     InsightSelectors: list<Shapes\InsightSelector>,
     *     EventDataStore?: string|null,
     *     InsightsDestination?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
