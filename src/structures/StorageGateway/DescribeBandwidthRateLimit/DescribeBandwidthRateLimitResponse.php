<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeBandwidthRateLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property int<51200, max>|null $AverageUploadRateLimitInBitsPerSec
 * @property int<102400, max>|null $AverageDownloadRateLimitInBitsPerSec
 */
class DescribeBandwidthRateLimitResponse extends Response
{
}
