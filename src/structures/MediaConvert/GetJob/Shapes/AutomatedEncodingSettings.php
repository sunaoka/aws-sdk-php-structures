<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedAbrSettings $AbrSettings
 */
class AutomatedEncodingSettings extends Shape
{
    /**
     * @param array{AbrSettings?: AutomatedAbrSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
