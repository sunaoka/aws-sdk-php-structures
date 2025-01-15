<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksPodPropertiesDetail|null $podProperties
 */
class EksPropertiesDetail extends Shape
{
    /**
     * @param array{podProperties?: EksPodPropertiesDetail|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
