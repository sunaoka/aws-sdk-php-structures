<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucket\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SingleAvailabilityZone'|'SingleLocalZone' $DataRedundancy
 * @property 'Directory' $Type
 */
class BucketInfo extends Shape
{
    /**
     * @param array{
     *     DataRedundancy?: 'SingleAvailabilityZone'|'SingleLocalZone',
     *     Type?: 'Directory'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
