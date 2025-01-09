<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetUtterancesView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $utteranceString
 * @property int $count
 * @property int $distinctUsers
 * @property \Aws\Api\DateTimeResult $firstUtteredDate
 * @property \Aws\Api\DateTimeResult $lastUtteredDate
 */
class UtteranceData extends Shape
{
    /**
     * @param array{
     *     utteranceString?: string,
     *     count?: int,
     *     distinctUsers?: int,
     *     firstUtteredDate?: \Aws\Api\DateTimeResult,
     *     lastUtteredDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
