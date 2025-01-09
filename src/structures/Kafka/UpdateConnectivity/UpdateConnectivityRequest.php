<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateConnectivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property Shapes\ConnectivityInfo $ConnectivityInfo
 * @property string $CurrentVersion
 */
class UpdateConnectivityRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ConnectivityInfo: Shapes\ConnectivityInfo,
     *     CurrentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
