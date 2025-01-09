<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<180, 86400> $minSeconds
 * @property int<180, 86400> $maxSeconds
 */
class DurationRange extends Shape
{
    /**
     * @param array{
     *     minSeconds?: int<180, 86400>,
     *     maxSeconds?: int<180, 86400>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
