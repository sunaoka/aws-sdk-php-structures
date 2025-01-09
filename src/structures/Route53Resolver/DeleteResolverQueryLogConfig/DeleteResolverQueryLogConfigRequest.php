<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverQueryLogConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResolverQueryLogConfigId
 */
class DeleteResolverQueryLogConfigRequest extends Request
{
    /**
     * @param array{ResolverQueryLogConfigId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
