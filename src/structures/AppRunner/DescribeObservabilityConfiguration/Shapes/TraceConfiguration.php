<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeObservabilityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWSXRAY' $Vendor
 */
class TraceConfiguration extends Shape
{
    /**
     * @param array{Vendor: 'AWSXRAY'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
