<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateBandwidthRateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property int<51200, max> $AverageUploadRateLimitInBitsPerSec
 * @property int<102400, max> $AverageDownloadRateLimitInBitsPerSec
 */
class UpdateBandwidthRateLimitRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     AverageUploadRateLimitInBitsPerSec?: int<51200, max>,
     *     AverageDownloadRateLimitInBitsPerSec?: int<102400, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
