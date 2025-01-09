<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $stringValue
 * @property double $doubleValue
 * @property DatasetContentVersionValue $datasetContentVersionValue
 * @property OutputFileUriValue $outputFileUriValue
 */
class Variable extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     stringValue?: string,
     *     doubleValue?: double,
     *     datasetContentVersionValue?: DatasetContentVersionValue,
     *     outputFileUriValue?: OutputFileUriValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
