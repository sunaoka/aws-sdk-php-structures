<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeBandwidthRateLimit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property int $AverageUploadRateLimitInBitsPerSec
 * @property int $AverageDownloadRateLimitInBitsPerSec
 */
class DescribeBandwidthRateLimitResponse extends Response
{
}
