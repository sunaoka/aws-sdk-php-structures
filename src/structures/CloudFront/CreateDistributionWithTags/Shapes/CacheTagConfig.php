<?php

namespace Sunaoka\Aws\Structures\CloudFront\CreateDistributionWithTags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HeaderName
 */
class CacheTagConfig extends Shape
{
    /**
     * @param array{HeaderName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
