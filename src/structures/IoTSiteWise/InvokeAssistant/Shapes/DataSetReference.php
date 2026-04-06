<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\InvokeAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $datasetArn
 * @property Source|null $source
 */
class DataSetReference extends Shape
{
    /**
     * @param array{
     *     datasetArn?: string|null,
     *     source?: Source|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
