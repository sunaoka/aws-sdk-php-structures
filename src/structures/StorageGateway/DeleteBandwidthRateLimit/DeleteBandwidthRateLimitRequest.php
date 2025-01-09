<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteBandwidthRateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $BandwidthType
 */
class DeleteBandwidthRateLimitRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     BandwidthType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
