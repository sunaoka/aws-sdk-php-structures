<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetUtterancesView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $utteranceString
 * @property int|null $count
 * @property int|null $distinctUsers
 * @property \Aws\Api\DateTimeResult|null $firstUtteredDate
 * @property \Aws\Api\DateTimeResult|null $lastUtteredDate
 */
class UtteranceData extends Shape
{
    /**
     * @param array{
     *     utteranceString?: string|null,
     *     count?: int|null,
     *     distinctUsers?: int|null,
     *     firstUtteredDate?: \Aws\Api\DateTimeResult|null,
     *     lastUtteredDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
