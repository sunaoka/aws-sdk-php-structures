<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterCompute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $ComputeName
 * @property string $CertificatePath
 * @property string $DnsName
 * @property string $IpAddress
 * @property string $Location
 */
class RegisterComputeRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     ComputeName: string,
     *     CertificatePath?: string,
     *     DnsName?: string,
     *     IpAddress?: string,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
