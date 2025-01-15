<?php

namespace Sunaoka\Aws\Structures\Pinpoint\ListJourneys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Cap
 * @property int|null $Days
 */
class JourneyTimeframeCap extends Shape
{
    /**
     * @param array{
     *     Cap?: int|null,
     *     Days?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
