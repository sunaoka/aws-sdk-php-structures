<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<180, 86400>|null $minSeconds
 * @property int<180, 86400>|null $maxSeconds
 */
class DurationRange extends Shape
{
    /**
     * @param array{
     *     minSeconds?: int<180, 86400>|null,
     *     maxSeconds?: int<180, 86400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
