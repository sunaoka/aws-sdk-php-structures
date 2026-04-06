<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnabledByMotion
 */
class ProactiveJoin extends Shape
{
    /**
     * @param array{EnabledByMotion?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
