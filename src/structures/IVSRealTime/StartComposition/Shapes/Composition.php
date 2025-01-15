<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $stageArn
 * @property 'STARTING'|'ACTIVE'|'STOPPING'|'FAILED'|'STOPPED' $state
 * @property LayoutConfiguration $layout
 * @property list<Destination> $destinations
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
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
