<?php

namespace Sunaoka\Aws\Structures\drs\GetLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $osByol
 */
class Licensing extends Shape
{
    /**
     * @param array{osByol?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
