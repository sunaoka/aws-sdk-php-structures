<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $End
 * @property string $Start
 */
class QuietTime extends Shape
{
    /**
     * @param array{
     *     End?: string,
     *     Start?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
