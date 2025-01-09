<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property 'RowAudit'|'RowMasking'|'ColumnAudit'|'ColumnMasking' $PiiType
 * @property list<string> $EntityTypesToDetect
 * @property string $OutputColumnName
 * @property double $SampleFraction
 * @property double $ThresholdFraction
 * @property string $MaskValue
 */
class PIIDetection extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PiiType: 'RowAudit'|'RowMasking'|'ColumnAudit'|'ColumnMasking',
     *     EntityTypesToDetect: list<string>,
     *     OutputColumnName?: string,
     *     SampleFraction?: double,
     *     ThresholdFraction?: double,
     *     MaskValue?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
