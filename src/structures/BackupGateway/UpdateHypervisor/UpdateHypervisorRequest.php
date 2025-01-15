<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateHypervisor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Host
 * @property string $HypervisorArn
 * @property string|null $LogGroupArn
 * @property string|null $Name
 * @property string|null $Password
 * @property string|null $Username
 */
class UpdateHypervisorRequest extends Request
{
    /**
     * @param array{
     *     Host?: string|null,
     *     HypervisorArn: string,
     *     LogGroupArn?: string|null,
     *     Name?: string|null,
     *     Password?: string|null,
     *     Username?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
