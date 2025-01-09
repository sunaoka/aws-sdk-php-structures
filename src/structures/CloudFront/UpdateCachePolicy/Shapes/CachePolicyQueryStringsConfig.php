<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'allExcept'|'all' $QueryStringBehavior
 * @property QueryStringNames $QueryStrings
 */
class CachePolicyQueryStringsConfig extends Shape
{
    /**
     * @param array{
     *     QueryStringBehavior: 'none'|'whitelist'|'allExcept'|'all',
     *     QueryStrings?: QueryStringNames
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
