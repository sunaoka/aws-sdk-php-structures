<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\CreateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnabledByMotion
 */
class CreateProactiveJoin extends Shape
{
    /**
     * @param array{EnabledByMotion: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
