<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $thresholdBreached
 */
class AlertStateData extends Shape
{
    /**
     * @param array{thresholdBreached?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
