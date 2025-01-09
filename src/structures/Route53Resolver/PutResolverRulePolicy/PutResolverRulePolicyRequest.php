<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\PutResolverRulePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $ResolverRulePolicy
 */
class PutResolverRulePolicyRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ResolverRulePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
