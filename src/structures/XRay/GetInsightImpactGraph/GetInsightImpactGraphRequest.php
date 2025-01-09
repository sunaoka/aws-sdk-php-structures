<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightImpactGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $NextToken
 */
class GetInsightImpactGraphRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
