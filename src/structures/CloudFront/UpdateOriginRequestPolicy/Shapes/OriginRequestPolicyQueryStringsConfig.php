<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateOriginRequestPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'all'|'allExcept' $QueryStringBehavior
 * @property QueryStringNames $QueryStrings
 */
class OriginRequestPolicyQueryStringsConfig extends Shape
{
    /**
     * @param array{
     *     QueryStringBehavior: 'none'|'whitelist'|'all'|'allExcept',
     *     QueryStrings?: QueryStringNames
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
