<?php

namespace Sunaoka\Aws\Structures\ConfigService\ListConformancePackComplianceScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Score
 * @property string|null $ConformancePackName
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 */
class ConformancePackComplianceScore extends Shape
{
    /**
     * @param array{
     *     Score?: string|null,
     *     ConformancePackName?: string|null,
     *     LastUpdatedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
