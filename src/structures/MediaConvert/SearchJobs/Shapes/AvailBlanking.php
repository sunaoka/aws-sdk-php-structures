<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailBlankingImage
 */
class AvailBlanking extends Shape
{
    /**
     * @param array{AvailBlankingImage?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
