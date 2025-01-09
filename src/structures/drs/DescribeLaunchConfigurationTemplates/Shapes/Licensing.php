<?php

namespace Sunaoka\Aws\Structures\drs\DescribeLaunchConfigurationTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $osByol
 */
class Licensing extends Shape
{
    /**
     * @param array{osByol?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
