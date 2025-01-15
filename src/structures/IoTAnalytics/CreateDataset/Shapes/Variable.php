<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $stringValue
 * @property double|null $doubleValue
 * @property DatasetContentVersionValue|null $datasetContentVersionValue
 * @property OutputFileUriValue|null $outputFileUriValue
 */
class Variable extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     stringValue?: string|null,
     *     doubleValue?: double|null,
     *     datasetContentVersionValue?: DatasetContentVersionValue|null,
     *     outputFileUriValue?: OutputFileUriValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
