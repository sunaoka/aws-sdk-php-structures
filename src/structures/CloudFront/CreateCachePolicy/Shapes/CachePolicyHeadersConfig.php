<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateCachePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'whitelist' $HeaderBehavior
 * @property Headers|null $Headers
 */
class CachePolicyHeadersConfig extends Shape
{
    /**
     * @param array{
     *     HeaderBehavior: 'none'|'whitelist',
     *     Headers?: Headers|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
