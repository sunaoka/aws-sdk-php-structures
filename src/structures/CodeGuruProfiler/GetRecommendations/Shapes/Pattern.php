<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $countersToAggregate
 * @property string|null $description
 * @property string|null $id
 * @property string|null $name
 * @property string|null $resolutionSteps
 * @property list<list<string>>|null $targetFrames
 * @property double|null $thresholdPercent
 */
class Pattern extends Shape
{
    /**
     * @param array{
     *     countersToAggregate?: list<string>|null,
     *     description?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     resolutionSteps?: string|null,
     *     targetFrames?: list<list<string>>|null,
     *     thresholdPercent?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
