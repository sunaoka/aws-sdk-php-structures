<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FindingType
 * @property \Aws\Api\DateTimeResult|null $LastGeneratedAt
 * @property int|null $TotalFindings
 */
class FindingTypeStatistics extends Shape
{
    /**
     * @param array{
     *     FindingType?: string|null,
     *     LastGeneratedAt?: \Aws\Api\DateTimeResult|null,
     *     TotalFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
