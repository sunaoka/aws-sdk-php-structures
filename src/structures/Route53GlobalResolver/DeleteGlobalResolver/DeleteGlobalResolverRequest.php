<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DeleteGlobalResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $globalResolverId
 */
class DeleteGlobalResolverRequest extends Request
{
    /**
     * @param array{globalResolverId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
