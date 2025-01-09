<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeServiceAccessPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Options
 * @property OptionStatus $Status
 */
class AccessPoliciesStatus extends Shape
{
    /**
     * @param array{
     *     Options: string,
     *     Status: OptionStatus
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
