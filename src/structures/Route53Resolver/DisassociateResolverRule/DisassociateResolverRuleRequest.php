<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VPCId
 * @property string $ResolverRuleId
 */
class DisassociateResolverRuleRequest extends Request
{
    /**
     * @param array{
     *     VPCId: string,
     *     ResolverRuleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
