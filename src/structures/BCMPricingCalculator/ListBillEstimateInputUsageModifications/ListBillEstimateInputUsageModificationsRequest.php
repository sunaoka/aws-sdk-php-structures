<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateInputUsageModifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $billEstimateId
 * @property list<Shapes\ListUsageFilter> $filters
 * @property string $nextToken
 * @property int $maxResults
 */
class ListBillEstimateInputUsageModificationsRequest extends Request
{
    /**
     * @param array{
     *     billEstimateId: string,
     *     filters?: list<Shapes\ListUsageFilter>,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
