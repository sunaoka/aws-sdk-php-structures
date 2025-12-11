<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BucketCorsRule>|null $rules
 */
class BucketCorsConfig extends Shape
{
    /**
     * @param array{rules?: list<BucketCorsRule>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
