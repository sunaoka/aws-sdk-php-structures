<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateHypervisor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HypervisorArn
 * @property string|null $Host
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $Name
 * @property string|null $LogGroupArn
 */
class UpdateHypervisorRequest extends Request
{
    /**
     * @param array{
     *     HypervisorArn: string,
     *     Host?: string|null,
     *     Username?: string|null,
     *     Password?: string|null,
     *     Name?: string|null,
     *     LogGroupArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
