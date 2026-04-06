<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxQueryTCU
 * @property 'BYTES_SCANNED'|'COMPUTE_UNITS'|null $QueryPricingModel
 * @property Shapes\QueryComputeRequest|null $QueryCompute
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     MaxQueryTCU?: int|null,
     *     QueryPricingModel?: 'BYTES_SCANNED'|'COMPUTE_UNITS'|null,
     *     QueryCompute?: Shapes\QueryComputeRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
