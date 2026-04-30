<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateConnectivity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property Shapes\ConnectivityInfo|null $ConnectivityInfo
 * @property string $CurrentVersion
 * @property Shapes\ZookeeperAccess|null $ZookeeperAccess
 */
class UpdateConnectivityRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ConnectivityInfo?: Shapes\ConnectivityInfo|null,
     *     CurrentVersion: string,
     *     ZookeeperAccess?: Shapes\ZookeeperAccess|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
