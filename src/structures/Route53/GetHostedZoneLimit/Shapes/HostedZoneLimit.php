<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZoneLimit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MAX_RRSETS_BY_ZONE'|'MAX_VPCS_ASSOCIATED_BY_ZONE' $Type
 * @property int<1, max> $Value
 */
class HostedZoneLimit extends Shape
{
    /**
     * @param array{
     *     Type: 'MAX_RRSETS_BY_ZONE'|'MAX_VPCS_ASSOCIATED_BY_ZONE',
     *     Value: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
