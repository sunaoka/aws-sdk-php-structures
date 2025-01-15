<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutRemediationConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $ConcurrentExecutionRatePercentage
 * @property int<1, 100>|null $ErrorPercentage
 */
class SsmControls extends Shape
{
    /**
     * @param array{
     *     ConcurrentExecutionRatePercentage?: int<1, 100>|null,
     *     ErrorPercentage?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
