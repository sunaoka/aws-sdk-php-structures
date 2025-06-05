<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputCommitmentModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billEstimateId
 * @property string|null $nextToken
 * @property int<1, 25>|null $maxResults
 */
class ListBillEstimateInputCommitmentModificationsRequest extends Request
{
    /**
     * @param array{
     *     billEstimateId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 25>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
