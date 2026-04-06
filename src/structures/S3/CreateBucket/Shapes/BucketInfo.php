<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SingleAvailabilityZone'|'SingleLocalZone'|null $DataRedundancy
 * @property 'Directory'|null $Type
 */
class BucketInfo extends Shape
{
    /**
     * @param array{
     *     DataRedundancy?: 'SingleAvailabilityZone'|'SingleLocalZone'|null,
     *     Type?: 'Directory'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
