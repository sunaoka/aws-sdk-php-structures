<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property 'RowAudit'|'RowMasking'|'ColumnAudit'|'ColumnMasking' $PiiType
 * @property list<string> $EntityTypesToDetect
 * @property string|null $OutputColumnName
 * @property double|null $SampleFraction
 * @property double|null $ThresholdFraction
 * @property string|null $MaskValue
 */
class PIIDetection extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PiiType: 'RowAudit'|'RowMasking'|'ColumnAudit'|'ColumnMasking',
     *     EntityTypesToDetect: list<string>,
     *     OutputColumnName?: string|null,
     *     SampleFraction?: double|null,
     *     ThresholdFraction?: double|null,
     *     MaskValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
