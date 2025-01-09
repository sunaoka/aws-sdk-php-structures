<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListCompositions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $stageArn
 * @property list<DestinationSummary> $destinations
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'FAILED'|'STOPPED' $state
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class CompositionSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     stageArn: string,
     *     destinations: list<DestinationSummary>,
     *     state: 'STARTING'|'ACTIVE'|'STOPPING'|'FAILED'|'STOPPED',
     *     tags?: array<string, string>,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
