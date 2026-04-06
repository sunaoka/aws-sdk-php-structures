<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListCompositions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $stageArn
 * @property list<DestinationSummary> $destinations
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'FAILED'|'STOPPED' $state
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class CompositionSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     stageArn: string,
     *     destinations: list<DestinationSummary>,
     *     state: 'STARTING'|'ACTIVE'|'STOPPING'|'FAILED'|'STOPPED',
     *     tags?: array<string, string>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
