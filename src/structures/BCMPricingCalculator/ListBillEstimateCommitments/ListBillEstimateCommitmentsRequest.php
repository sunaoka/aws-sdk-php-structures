<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateCommitments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billEstimateId
 * @property string $nextToken
 * @property int<min, 25> $maxResults
 */
class ListBillEstimateCommitmentsRequest extends Request
{
    /**
     * @param array{
     *     billEstimateId: string,
     *     nextToken?: string,
     *     maxResults?: int<min, 25>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
