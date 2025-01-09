<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeRecoveryPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string $Marker
 * @property int<1, max> $Limit
 */
class DescribeTapeRecoveryPointsRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     Marker?: string,
     *     Limit?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
