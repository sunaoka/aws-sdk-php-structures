<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetGroupArn
 * @property list<AttributeConfig> $AttributeConfigs
 * @property list<AdditionalDataset> $AdditionalDatasets
 */
class DataConfig extends Shape
{
    /**
     * @param array{
     *     DatasetGroupArn: string,
     *     AttributeConfigs?: list<AttributeConfig>,
     *     AdditionalDatasets?: list<AdditionalDataset>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
