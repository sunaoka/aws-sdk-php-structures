<?php

namespace Sunaoka\Aws\Structures\Ec2\AdvertiseByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property string $Asn
 * @property bool $DryRun
 * @property string $NetworkBorderGroup
 */
class AdvertiseByoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     Asn?: string,
     *     DryRun?: bool,
     *     NetworkBorderGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
