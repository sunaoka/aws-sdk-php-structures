<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateHypervisor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Host
 * @property string $HypervisorArn
 * @property string $LogGroupArn
 * @property string $Name
 * @property string $Password
 * @property string $Username
 */
class UpdateHypervisorRequest extends Request
{
    /**
     * @param array{
     *     Host?: string,
     *     HypervisorArn: string,
     *     LogGroupArn?: string,
     *     Name?: string,
     *     Password?: string,
     *     Username?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
