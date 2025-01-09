<?php

namespace Sunaoka\Aws\Structures\BackupGateway\TestHypervisorConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property string $Host
 * @property string $Password
 * @property string $Username
 */
class TestHypervisorConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     Host: string,
     *     Password?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
