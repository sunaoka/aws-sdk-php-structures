<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribePendingAggregationRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 20>|null $Limit
 * @property string|null $NextToken
 */
class DescribePendingAggregationRequestsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<0, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
