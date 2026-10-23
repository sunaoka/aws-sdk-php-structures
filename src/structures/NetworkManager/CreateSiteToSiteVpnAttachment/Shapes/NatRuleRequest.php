<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateSiteToSiteVpnAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 32766> $RuleNumber
 * @property string $MatchSourceCidr
 * @property string $NatCidr
 */
class NatRuleRequest extends Shape
{
    /**
     * @param array{
     *     RuleNumber: int<1, 32766>,
     *     MatchSourceCidr: string,
     *     NatCidr: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
