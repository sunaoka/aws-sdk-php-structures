<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverRuleId
 * @property Shapes\ResolverRuleConfig $Config
 */
class UpdateResolverRuleRequest extends Request
{
    /**
     * @param array{
     *     ResolverRuleId: string,
     *     Config: Shapes\ResolverRuleConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
