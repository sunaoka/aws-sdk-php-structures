<?php

namespace Sunaoka\Aws\Structures\BackupGateway\TestHypervisorConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property string $Host
 * @property string|null $Password
 * @property string|null $Username
 */
class TestHypervisorConfigurationRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     Host: string,
     *     Password?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
