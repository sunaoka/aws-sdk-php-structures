<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\RunMicrovm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LoggingDisabled|null $disabled
 * @property CloudWatchLogging|null $cloudWatch
 */
class Logging extends Shape
{
    /**
     * @param array{
     *     disabled?: LoggingDisabled|null,
     *     cloudWatch?: CloudWatchLogging|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
