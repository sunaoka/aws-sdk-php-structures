<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EcrRescanDurationState|null $rescanDurationState
 */
class EcrConfigurationState extends Shape
{
    /**
     * @param array{rescanDurationState?: EcrRescanDurationState|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
