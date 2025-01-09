<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $MaxQueryTCU
 * @property 'BYTES_SCANNED'|'COMPUTE_UNITS' $QueryPricingModel
 * @property Shapes\QueryComputeResponse $QueryCompute
 */
class UpdateAccountSettingsResponse extends Response
{
}
