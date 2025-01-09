<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeBandwidthRateLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property int<51200, max> $AverageUploadRateLimitInBitsPerSec
 * @property int<102400, max> $AverageDownloadRateLimitInBitsPerSec
 */
class DescribeBandwidthRateLimitResponse extends Response
{
}
