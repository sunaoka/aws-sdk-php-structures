<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 */
class ScalarReferenceDetails extends Shape
{
    /**
     * @param array{Value?: double} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
