<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $ConcurrentExecutionRatePercentage
 * @property int<1, 100> $ErrorPercentage
 */
class SsmControls extends Shape
{
    /**
     * @param array{
     *     ConcurrentExecutionRatePercentage?: int<1, 100>,
     *     ErrorPercentage?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
