<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetArn
 * @property Source $source
 */
class DataSetReference extends Shape
{
    /**
     * @param array{
     *     datasetArn?: string,
     *     source?: Source
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
