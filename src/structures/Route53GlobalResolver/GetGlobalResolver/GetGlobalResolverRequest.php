<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetGlobalResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $globalResolverId
 */
class GetGlobalResolverRequest extends Request
{
    /**
     * @param array{globalResolverId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
