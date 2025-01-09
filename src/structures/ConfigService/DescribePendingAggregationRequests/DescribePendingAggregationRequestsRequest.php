<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribePendingAggregationRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 20> $Limit
 * @property string $NextToken
 */
class DescribePendingAggregationRequestsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<0, 20>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
