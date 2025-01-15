<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Bucket>|null $buckets
 */
class BucketInfo extends Shape
{
    /**
     * @param array{buckets?: list<Bucket>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
