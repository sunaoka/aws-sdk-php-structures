<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateBandwidthRateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int $AverageUploadRateLimitInBitsPerSec
 * @property int $AverageDownloadRateLimitInBitsPerSec
 */
class UpdateBandwidthRateLimitRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     AverageUploadRateLimitInBitsPerSec?: int,
     *     AverageDownloadRateLimitInBitsPerSec?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
