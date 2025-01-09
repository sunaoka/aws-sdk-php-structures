<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $countersToAggregate
 * @property string $description
 * @property string $id
 * @property string $name
 * @property string $resolutionSteps
 * @property list<list<string>> $targetFrames
 * @property double $thresholdPercent
 */
class Pattern extends Shape
{
    /**
     * @param array{
     *     countersToAggregate?: list<string>,
     *     description?: string,
     *     id?: string,
     *     name?: string,
     *     resolutionSteps?: string,
     *     targetFrames?: list<list<string>>,
     *     thresholdPercent?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
