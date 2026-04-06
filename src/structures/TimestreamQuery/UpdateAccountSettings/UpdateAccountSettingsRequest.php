<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $MaxQueryTCU
 * @property 'BYTES_SCANNED'|'COMPUTE_UNITS'|null $QueryPricingModel
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{
     *     MaxQueryTCU?: int|null,
     *     QueryPricingModel?: 'BYTES_SCANNED'|'COMPUTE_UNITS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
