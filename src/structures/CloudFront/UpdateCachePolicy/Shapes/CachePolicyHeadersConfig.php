<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist' $HeaderBehavior
 * @property Headers $Headers
 */
class CachePolicyHeadersConfig extends Shape
{
    /**
     * @param array{
     *     HeaderBehavior: 'none'|'whitelist',
     *     Headers?: Headers
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
