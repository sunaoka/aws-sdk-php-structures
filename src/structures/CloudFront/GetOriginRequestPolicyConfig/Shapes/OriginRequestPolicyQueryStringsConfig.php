<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetOriginRequestPolicyConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'all'|'allExcept' $QueryStringBehavior
 * @property QueryStringNames|null $QueryStrings
 */
class OriginRequestPolicyQueryStringsConfig extends Shape
{
    /**
     * @param array{
     *     QueryStringBehavior: 'none'|'whitelist'|'all'|'allExcept',
     *     QueryStrings?: QueryStringNames|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
