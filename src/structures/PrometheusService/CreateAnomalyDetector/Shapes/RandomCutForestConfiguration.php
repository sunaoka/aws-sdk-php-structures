<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $query
 * @property int<2, 1024>|null $shingleSize
 * @property int<256, 1024>|null $sampleSize
 * @property IgnoreNearExpected|null $ignoreNearExpectedFromAbove
 * @property IgnoreNearExpected|null $ignoreNearExpectedFromBelow
 */
class RandomCutForestConfiguration extends Shape
{
    /**
     * @param array{
     *     query: string,
     *     shingleSize?: int<2, 1024>|null,
     *     sampleSize?: int<256, 1024>|null,
     *     ignoreNearExpectedFromAbove?: IgnoreNearExpected|null,
     *     ignoreNearExpectedFromBelow?: IgnoreNearExpected|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
