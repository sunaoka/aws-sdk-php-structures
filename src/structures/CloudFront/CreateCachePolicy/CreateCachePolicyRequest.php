<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCachePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CachePolicyConfig $CachePolicyConfig
 */
class CreateCachePolicyRequest extends Request
{
    /**
     * @param array{CachePolicyConfig: Shapes\CachePolicyConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
