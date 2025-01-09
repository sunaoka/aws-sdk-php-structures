<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\PutResolverQueryLogConfigPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $ResolverQueryLogConfigPolicy
 */
class PutResolverQueryLogConfigPolicyRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     ResolverQueryLogConfigPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
