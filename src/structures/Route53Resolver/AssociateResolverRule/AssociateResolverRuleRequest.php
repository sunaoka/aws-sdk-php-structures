<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateResolverRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverRuleId
 * @property string $Name
 * @property string $VPCId
 */
class AssociateResolverRuleRequest extends Request
{
    /**
     * @param array{
     *     ResolverRuleId: string,
     *     Name?: string,
     *     VPCId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
