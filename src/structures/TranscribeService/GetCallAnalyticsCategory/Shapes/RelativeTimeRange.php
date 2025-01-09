<?php

namespace Sunaoka\Aws\Structures\TranscribeService\GetCallAnalyticsCategory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $StartPercentage
 * @property int<0, 100> $EndPercentage
 * @property int<0, 100> $First
 * @property int<0, 100> $Last
 */
class RelativeTimeRange extends Shape
{
    /**
     * @param array{
     *     StartPercentage?: int<0, 100>,
     *     EndPercentage?: int<0, 100>,
     *     First?: int<0, 100>,
     *     Last?: int<0, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
