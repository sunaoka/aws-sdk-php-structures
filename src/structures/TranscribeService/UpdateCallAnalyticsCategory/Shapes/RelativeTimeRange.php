<?php

namespace Sunaoka\Aws\Structures\TranscribeService\UpdateCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StartPercentage
 * @property int $EndPercentage
 * @property int $First
 * @property int $Last
 */
class RelativeTimeRange extends Shape
{
    /**
     * @param array{
     *     StartPercentage?: int,
     *     EndPercentage?: int,
     *     First?: int,
     *     Last?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
