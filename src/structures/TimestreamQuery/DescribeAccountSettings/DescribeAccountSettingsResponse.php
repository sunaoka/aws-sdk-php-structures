<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeAccountSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $MaxQueryTCU
 * @property 'BYTES_SCANNED'|'COMPUTE_UNITS'|null $QueryPricingModel
 */
class DescribeAccountSettingsResponse extends Response
{
}
