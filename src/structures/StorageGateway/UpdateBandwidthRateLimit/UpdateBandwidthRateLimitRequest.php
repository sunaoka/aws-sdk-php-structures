<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateBandwidthRateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int<51200, max>|null $AverageUploadRateLimitInBitsPerSec
 * @property int<102400, max>|null $AverageDownloadRateLimitInBitsPerSec
 */
class UpdateBandwidthRateLimitRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     AverageUploadRateLimitInBitsPerSec?: int<51200, max>|null,
     *     AverageDownloadRateLimitInBitsPerSec?: int<102400, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
