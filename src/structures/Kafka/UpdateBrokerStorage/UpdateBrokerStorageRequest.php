<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateBrokerStorage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property string $CurrentVersion
 * @property list<Shapes\BrokerEBSVolumeInfo> $TargetBrokerEBSVolumeInfo
 */
class UpdateBrokerStorageRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     CurrentVersion: string,
     *     TargetBrokerEBSVolumeInfo: list<Shapes\BrokerEBSVolumeInfo>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
