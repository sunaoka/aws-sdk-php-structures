<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConformancePackComplianceScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Score
 * @property string $ConformancePackName
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 */
class ConformancePackComplianceScore extends Shape
{
    /**
     * @param array{
     *     Score?: string,
     *     ConformancePackName?: string,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
