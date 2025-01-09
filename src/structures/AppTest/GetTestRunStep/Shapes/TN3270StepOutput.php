<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSetExportLocation
 * @property string $dmsOutputLocation
 * @property list<DataSet> $dataSetDetails
 * @property string $scriptOutputLocation
 */
class TN3270StepOutput extends Shape
{
    /**
     * @param array{
     *     dataSetExportLocation?: string,
     *     dmsOutputLocation?: string,
     *     dataSetDetails?: list<DataSet>,
     *     scriptOutputLocation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
