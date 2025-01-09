<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxQueryTCU
 * @property 'BYTES_SCANNED'|'COMPUTE_UNITS' $QueryPricingModel
 * @property Shapes\QueryComputeRequest $QueryCompute
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     MaxQueryTCU?: int,
     *     QueryPricingModel?: 'BYTES_SCANNED'|'COMPUTE_UNITS',
     *     QueryCompute?: Shapes\QueryComputeRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
