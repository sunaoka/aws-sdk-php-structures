<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateCommitments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billEstimateId
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 */
class ListBillEstimateCommitmentsRequest extends Request
{
    /**
     * @param array{
     *     billEstimateId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
