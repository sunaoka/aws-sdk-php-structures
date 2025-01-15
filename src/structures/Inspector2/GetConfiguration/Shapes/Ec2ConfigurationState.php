<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2ScanModeState|null $scanModeState
 */
class Ec2ConfigurationState extends Shape
{
    /**
     * @param array{scanModeState?: Ec2ScanModeState|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
