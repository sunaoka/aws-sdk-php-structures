<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCachePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CachePolicyConfig $CachePolicyConfig
 * @property string $Id
 * @property string $IfMatch
 */
class UpdateCachePolicyRequest extends Request
{
    /**
     * @param array{
     *     CachePolicyConfig: Shapes\CachePolicyConfig,
     *     Id: string,
     *     IfMatch?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
