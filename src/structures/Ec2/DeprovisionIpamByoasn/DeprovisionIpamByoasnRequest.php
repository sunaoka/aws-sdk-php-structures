<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionIpamByoasn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamId
 * @property string $Asn
 */
class DeprovisionIpamByoasnRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamId: string,
     *     Asn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
