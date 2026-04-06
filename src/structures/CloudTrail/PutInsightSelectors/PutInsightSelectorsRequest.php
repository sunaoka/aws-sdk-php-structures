<?php

namespace Sunaoka\Aws\Structures\CloudTrail\PutInsightSelectors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrailName
 * @property list<Shapes\InsightSelector> $InsightSelectors
 */
class PutInsightSelectorsRequest extends Request
{
    /**
     * @param array{
     *     TrailName: string,
     *     InsightSelectors: list<Shapes\InsightSelector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
