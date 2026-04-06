<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $MaxQueryTCU
 * @property 'BYTES_SCANNED'|'COMPUTE_UNITS'|null $QueryPricingModel
 */
class UpdateAccountSettingsResponse extends Response
{
}
