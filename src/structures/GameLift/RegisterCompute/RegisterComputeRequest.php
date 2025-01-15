<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterCompute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property string $ComputeName
 * @property string|null $CertificatePath
 * @property string|null $DnsName
 * @property string|null $IpAddress
 * @property string|null $Location
 */
class RegisterComputeRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     ComputeName: string,
     *     CertificatePath?: string|null,
     *     DnsName?: string|null,
     *     IpAddress?: string|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
