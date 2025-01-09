<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateClusterKafkaVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property Shapes\ConfigurationInfo $ConfigurationInfo
 * @property string $CurrentVersion
 * @property string $TargetKafkaVersion
 */
class UpdateClusterKafkaVersionRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ConfigurationInfo?: Shapes\ConfigurationInfo,
     *     CurrentVersion: string,
     *     TargetKafkaVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
