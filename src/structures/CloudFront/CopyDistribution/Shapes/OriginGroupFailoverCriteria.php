<?php

namespace Sunaoka\Aws\Structures\CloudFront\CopyDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StatusCodes $StatusCodes
 */
class OriginGroupFailoverCriteria extends Shape
{
    /**
     * @param array{StatusCodes: StatusCodes} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
