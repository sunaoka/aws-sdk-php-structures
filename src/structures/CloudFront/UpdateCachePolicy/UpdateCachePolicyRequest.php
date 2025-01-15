<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCachePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CachePolicyConfig $CachePolicyConfig
 * @property string $Id
 * @property string|null $IfMatch
 */
class UpdateCachePolicyRequest extends Request
{
    /**
     * @param array{
     *     CachePolicyConfig: Shapes\CachePolicyConfig,
     *     Id: string,
     *     IfMatch?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
