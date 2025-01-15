<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class GetInsightEventsRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
