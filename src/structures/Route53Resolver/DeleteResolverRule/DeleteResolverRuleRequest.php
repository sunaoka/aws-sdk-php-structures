<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverRuleId
 */
class DeleteResolverRuleRequest extends Request
{
    /**
     * @param array{ResolverRuleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
