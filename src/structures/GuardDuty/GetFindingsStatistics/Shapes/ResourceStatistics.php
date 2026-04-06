<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property \Aws\Api\DateTimeResult|null $LastGeneratedAt
 * @property string|null $ResourceId
 * @property string|null $ResourceType
 * @property int|null $TotalFindings
 */
class ResourceStatistics extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     LastGeneratedAt?: \Aws\Api\DateTimeResult|null,
     *     ResourceId?: string|null,
     *     ResourceType?: string|null,
     *     TotalFindings?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
