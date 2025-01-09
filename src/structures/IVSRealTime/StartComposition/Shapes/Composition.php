<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $stageArn
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'FAILED'|'STOPPED' $state
 * @property LayoutConfiguration $layout
 * @property list<Destination> $destinations
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class Composition extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     stageArn: string,
     *     state: 'STARTING'|'ACTIVE'|'STOPPING'|'FAILED'|'STOPPED',
     *     layout: LayoutConfiguration,
     *     destinations: list<Destination>,
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
