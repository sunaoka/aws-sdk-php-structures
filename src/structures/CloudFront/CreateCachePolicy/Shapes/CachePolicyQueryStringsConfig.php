<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'allExcept'|'all' $QueryStringBehavior
 * @property QueryStringNames|null $QueryStrings
 */
class CachePolicyQueryStringsConfig extends Shape
{
    /**
     * @param array{
     *     QueryStringBehavior: 'none'|'whitelist'|'allExcept'|'all',
     *     QueryStrings?: QueryStringNames|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
