<?php

namespace Sunaoka\Aws\Structures\Ec2\AdvertiseByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property string|null $Asn
 * @property bool|null $DryRun
 * @property string|null $NetworkBorderGroup
 */
class AdvertiseByoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     Asn?: string|null,
     *     DryRun?: bool|null,
     *     NetworkBorderGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
