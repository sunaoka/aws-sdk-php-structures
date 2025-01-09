<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksPodPropertiesDetail $podProperties
 */
class EksPropertiesDetail extends Shape
{
    /**
     * @param array{podProperties?: EksPodPropertiesDetail} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
