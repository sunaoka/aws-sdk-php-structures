<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Cap
 * @property int $Days
 */
class JourneyTimeframeCap extends Shape
{
    /**
     * @param array{
     *     Cap?: int,
     *     Days?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
