<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedAbrSettings|null $AbrSettings
 */
class AutomatedEncodingSettings extends Shape
{
    /**
     * @param array{AbrSettings?: AutomatedAbrSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
