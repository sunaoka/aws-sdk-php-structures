<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateScheduleAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputName
 * @property DataSourceConfiguration $dataSourceConfiguration
 */
class UpdateClippingDataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     outputName: string,
     *     dataSourceConfiguration: DataSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
