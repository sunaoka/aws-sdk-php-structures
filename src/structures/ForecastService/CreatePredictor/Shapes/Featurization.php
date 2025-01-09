<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property list<FeaturizationMethod> $FeaturizationPipeline
 */
class Featurization extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     FeaturizationPipeline?: list<FeaturizationMethod>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
