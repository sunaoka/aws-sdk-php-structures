<?php

namespace Sunaoka\Aws\Structures\Batch\ListSchedulingPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 */
class SchedulingPolicyListingDetail extends Shape
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
