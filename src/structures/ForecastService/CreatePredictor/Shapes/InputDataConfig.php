<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetGroupArn
 * @property list<SupplementaryFeature>|null $SupplementaryFeatures
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     DatasetGroupArn: string,
     *     SupplementaryFeatures?: list<SupplementaryFeature>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
