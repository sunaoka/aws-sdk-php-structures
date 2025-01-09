<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumeRecoveryPoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 */
class ListVolumeRecoveryPointsRequest extends Request
{
    /**
     * @param array{GatewayARN: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
