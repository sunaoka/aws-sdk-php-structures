<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeAccountSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $MaxQueryTCU
 * @property 'BYTES_SCANNED'|'COMPUTE_UNITS'|null $QueryPricingModel
 * @property Shapes\QueryComputeResponse|null $QueryCompute
 */
class DescribeAccountSettingsResponse extends Response
{
}
