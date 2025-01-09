<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamByoasn;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $IpamId
 * @property string $Asn
 * @property Shapes\AsnAuthorizationContext $AsnAuthorizationContext
 */
class ProvisionIpamByoasnRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     IpamId: string,
     *     Asn: string,
     *     AsnAuthorizationContext: Shapes\AsnAuthorizationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
