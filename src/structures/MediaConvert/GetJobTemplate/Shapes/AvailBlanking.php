<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailBlankingImage
 */
class AvailBlanking extends Shape
{
    /**
     * @param array{AvailBlankingImage?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
