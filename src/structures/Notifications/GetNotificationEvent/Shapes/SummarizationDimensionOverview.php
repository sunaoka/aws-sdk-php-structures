<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $count
 * @property list<string>|null $sampleValues
 */
class SummarizationDimensionOverview extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     count: int,
     *     sampleValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
