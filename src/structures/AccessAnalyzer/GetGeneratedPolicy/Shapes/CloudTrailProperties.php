<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TrailProperties> $trailProperties
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class CloudTrailProperties extends Shape
{
    /**
     * @param array{
     *     trailProperties: list<TrailProperties>,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
