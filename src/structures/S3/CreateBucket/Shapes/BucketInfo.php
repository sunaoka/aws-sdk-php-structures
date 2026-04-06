<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SingleAvailabilityZone'|null $DataRedundancy
 * @property 'Directory'|null $Type
 */
class BucketInfo extends Shape
{
    /**
     * @param array{
     *     DataRedundancy?: 'SingleAvailabilityZone'|null,
     *     Type?: 'Directory'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
