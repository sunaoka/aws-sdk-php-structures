<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetGroupArn
 * @property list<SupplementaryFeature> $SupplementaryFeatures
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     DatasetGroupArn: string,
     *     SupplementaryFeatures?: list<SupplementaryFeature>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
