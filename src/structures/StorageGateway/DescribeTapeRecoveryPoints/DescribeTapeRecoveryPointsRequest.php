<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeRecoveryPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property string|null $Marker
 * @property int<1, max>|null $Limit
 */
class DescribeTapeRecoveryPointsRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     Marker?: string|null,
     *     Limit?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
