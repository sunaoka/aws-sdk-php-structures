<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\UpdateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnabledByMotion
 */
class UpdateProactiveJoin extends Shape
{
    /**
     * @param array{EnabledByMotion: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
