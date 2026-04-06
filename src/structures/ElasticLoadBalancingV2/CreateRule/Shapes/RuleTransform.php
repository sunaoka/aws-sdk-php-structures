<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'host-header-rewrite'|'url-rewrite' $Type
 * @property HostHeaderRewriteConfig|null $HostHeaderRewriteConfig
 * @property UrlRewriteConfig|null $UrlRewriteConfig
 */
class RuleTransform extends Shape
{
    /**
     * @param array{
     *     Type: 'host-header-rewrite'|'url-rewrite',
     *     HostHeaderRewriteConfig?: HostHeaderRewriteConfig|null,
     *     UrlRewriteConfig?: UrlRewriteConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
