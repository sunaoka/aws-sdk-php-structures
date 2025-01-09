<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateClusterConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterArn
 * @property Shapes\ConfigurationInfo $ConfigurationInfo
 * @property string $CurrentVersion
 */
class UpdateClusterConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ClusterArn: string,
     *     ConfigurationInfo: Shapes\ConfigurationInfo,
     *     CurrentVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
