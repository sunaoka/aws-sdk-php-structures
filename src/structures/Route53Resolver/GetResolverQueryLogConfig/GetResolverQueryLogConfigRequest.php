<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\GetResolverQueryLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverQueryLogConfigId
 */
class GetResolverQueryLogConfigRequest extends Request
{
    /**
     * @param array{ResolverQueryLogConfigId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
