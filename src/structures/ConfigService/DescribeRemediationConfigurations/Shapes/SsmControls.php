<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ConcurrentExecutionRatePercentage
 * @property int $ErrorPercentage
 */
class SsmControls extends Shape
{
    /**
     * @param array{
     *     ConcurrentExecutionRatePercentage?: int,
     *     ErrorPercentage?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
