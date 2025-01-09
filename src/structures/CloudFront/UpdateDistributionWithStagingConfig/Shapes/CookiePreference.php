<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateDistributionWithStagingConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'all' $Forward
 * @property CookieNames $WhitelistedNames
 */
class CookiePreference extends Shape
{
    /**
     * @param array{
     *     Forward: 'none'|'whitelist'|'all',
     *     WhitelistedNames?: CookieNames
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
