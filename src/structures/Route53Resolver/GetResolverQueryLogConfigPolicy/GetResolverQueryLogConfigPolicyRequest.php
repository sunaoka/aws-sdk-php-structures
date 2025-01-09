<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfigPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetResolverQueryLogConfigPolicyRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
