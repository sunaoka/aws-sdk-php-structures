<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EcrRescanDurationState $rescanDurationState
 */
class EcrConfigurationState extends Shape
{
    /**
     * @param array{rescanDurationState?: EcrRescanDurationState} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
