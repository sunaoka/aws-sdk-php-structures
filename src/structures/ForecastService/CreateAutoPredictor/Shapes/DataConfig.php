<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatasetGroupArn
 * @property list<AttributeConfig>|null $AttributeConfigs
 * @property list<AdditionalDataset>|null $AdditionalDatasets
 */
class DataConfig extends Shape
{
    /**
     * @param array{
     *     DatasetGroupArn: string,
     *     AttributeConfigs?: list<AttributeConfig>|null,
     *     AdditionalDatasets?: list<AdditionalDataset>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
