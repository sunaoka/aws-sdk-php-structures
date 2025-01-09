<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FindingType
 * @property \Aws\Api\DateTimeResult $LastGeneratedAt
 * @property int $TotalFindings
 */
class FindingTypeStatistics extends Shape
{
    /**
     * @param array{
     *     FindingType?: string,
     *     LastGeneratedAt?: \Aws\Api\DateTimeResult,
     *     TotalFindings?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
