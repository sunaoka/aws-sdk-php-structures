<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataSetExportLocation
 * @property string|null $dmsOutputLocation
 * @property list<DataSet>|null $dataSetDetails
 */
class BatchStepOutput extends Shape
{
    /**
     * @param array{
     *     dataSetExportLocation?: string|null,
     *     dmsOutputLocation?: string|null,
     *     dataSetDetails?: list<DataSet>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
