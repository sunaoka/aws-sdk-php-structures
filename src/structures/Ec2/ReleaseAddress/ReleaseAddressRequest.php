<?php

namespace Sunaoka\Aws\Structures\Ec2\ReleaseAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AllocationId
 * @property string|null $PublicIp
 * @property string|null $NetworkBorderGroup
 * @property bool|null $DryRun
 */
class ReleaseAddressRequest extends Request
{
    /**
     * @param array{
     *     AllocationId?: string|null,
     *     PublicIp?: string|null,
     *     NetworkBorderGroup?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
