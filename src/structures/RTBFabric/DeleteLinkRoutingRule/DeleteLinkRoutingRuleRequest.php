<?php

namespace Sunaoka\Aws\Structures\RTBFabric\DeleteLinkRoutingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayId
 * @property string $linkId
 * @property string $ruleId
 */
class DeleteLinkRoutingRuleRequest extends Request
{
    /**
     * @param array{
     *     gatewayId: string,
     *     linkId: string,
     *     ruleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
