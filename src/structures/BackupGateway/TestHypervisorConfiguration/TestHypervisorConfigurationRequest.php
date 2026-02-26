<?php

namespace Sunaoka\Aws\Structures\BackupGateway\TestHypervisorConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property string $Host
 * @property string|null $Username
 * @property string|null $Password
 */
class TestHypervisorConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     Host: string,
     *     Username?: string|null,
     *     Password?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
