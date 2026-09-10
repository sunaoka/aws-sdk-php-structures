<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSourceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AlarmStateChangeDetail|null $alarmStateChange
 * @property TestRunSourceEventError|null $error
 */
class TestRunSourceEventDetail extends Shape
{
    /**
     * @param array{
     *     alarmStateChange?: AlarmStateChangeDetail|null,
     *     error?: TestRunSourceEventError|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
