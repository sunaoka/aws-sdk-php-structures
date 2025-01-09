<?php

namespace Sunaoka\Aws\Structures\Ec2\ReleaseAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property string $PublicIp
 * @property string $NetworkBorderGroup
 * @property bool $DryRun
 */
class ReleaseAddressRequest extends Request
{
    /**
     * @param array{
     *     AllocationId?: string,
     *     PublicIp?: string,
     *     NetworkBorderGroup?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
