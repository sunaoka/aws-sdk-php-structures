<?php

namespace Sunaoka\Aws\Structures\Sfn\ListMapRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionArn
 * @property string $mapRunArn
 * @property string $stateMachineArn
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $stopDate
 */
class MapRunListItem extends Shape
{
    /**
     * @param array{
     *     executionArn: string,
     *     mapRunArn: string,
     *     stateMachineArn: string,
     *     startDate: \Aws\Api\DateTimeResult,
     *     stopDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
