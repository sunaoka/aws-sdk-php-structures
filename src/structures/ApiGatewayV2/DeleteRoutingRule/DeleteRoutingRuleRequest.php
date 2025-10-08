<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\DeleteRoutingRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $DomainNameId
 * @property string $RoutingRuleId
 */
class DeleteRoutingRuleRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DomainNameId?: string|null,
     *     RoutingRuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
