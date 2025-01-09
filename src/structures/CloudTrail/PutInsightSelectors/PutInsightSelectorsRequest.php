<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutInsightSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrailName
 * @property list<Shapes\InsightSelector> $InsightSelectors
 * @property string $EventDataStore
 * @property string $InsightsDestination
 */
class PutInsightSelectorsRequest extends Request
{
    /**
     * @param array{
     *     TrailName?: string,
     *     InsightSelectors: list<Shapes\InsightSelector>,
     *     EventDataStore?: string,
     *     InsightsDestination?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
