<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $minSeconds
 * @property int $maxSeconds
 */
class DurationRange extends Shape
{
    /**
     * @param array{
     *     minSeconds?: int,
     *     maxSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
