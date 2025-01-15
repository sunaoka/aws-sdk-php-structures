<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist'|'all' $Forward
 * @property CookieNames|null $WhitelistedNames
 */
class CookiePreference extends Shape
{
    /**
     * @param array{
     *     Forward: 'none'|'whitelist'|'all',
     *     WhitelistedNames?: CookieNames|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
