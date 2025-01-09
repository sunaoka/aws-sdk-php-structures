<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScalarReferenceDetails $ScalarReferenceDetails
 */
class ReferenceDetails extends Shape
{
    /**
     * @param array{ScalarReferenceDetails?: ScalarReferenceDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
