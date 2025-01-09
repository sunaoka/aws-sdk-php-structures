<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZoneLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'MAX_RRSETS_BY_ZONE'|'MAX_VPCS_ASSOCIATED_BY_ZONE' $Type
 * @property string $HostedZoneId
 */
class GetHostedZoneLimitRequest extends Request
{
    /**
     * @param array{
     *     Type: 'MAX_RRSETS_BY_ZONE'|'MAX_VPCS_ASSOCIATED_BY_ZONE',
     *     HostedZoneId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
