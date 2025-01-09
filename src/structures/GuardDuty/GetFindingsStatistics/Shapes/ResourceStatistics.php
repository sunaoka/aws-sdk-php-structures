<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property \Aws\Api\DateTimeResult $LastGeneratedAt
 * @property string $ResourceId
 * @property string $ResourceType
 * @property int $TotalFindings
 */
class ResourceStatistics extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     LastGeneratedAt?: \Aws\Api\DateTimeResult,
     *     ResourceId?: string,
     *     ResourceType?: string,
     *     TotalFindings?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
