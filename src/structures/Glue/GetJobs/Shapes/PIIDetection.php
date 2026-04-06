<?php

namespace Sunaoka\Aws\Structures\Glue\GetJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property 'RowAudit'|'RowHashing'|'RowMasking'|'RowPartialMasking'|'ColumnAudit'|'ColumnHashing'|'ColumnMasking' $PiiType
 * @property list<string> $EntityTypesToDetect
 * @property string|null $OutputColumnName
 * @property double|null $SampleFraction
 * @property double|null $ThresholdFraction
 * @property string|null $MaskValue
 * @property string|null $RedactText
 * @property string|null $RedactChar
 * @property string|null $MatchPattern
 * @property int<0, max>|null $NumLeftCharsToExclude
 * @property int<0, max>|null $NumRightCharsToExclude
 * @property string|null $DetectionParameters
 * @property string|null $DetectionSensitivity
 */
class PIIDetection extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     PiiType: 'RowAudit'|'RowHashing'|'RowMasking'|'RowPartialMasking'|'ColumnAudit'|'ColumnHashing'|'ColumnMasking',
     *     EntityTypesToDetect: list<string>,
     *     OutputColumnName?: string|null,
     *     SampleFraction?: double|null,
     *     ThresholdFraction?: double|null,
     *     MaskValue?: string|null,
     *     RedactText?: string|null,
     *     RedactChar?: string|null,
     *     MatchPattern?: string|null,
     *     NumLeftCharsToExclude?: int<0, max>|null,
     *     NumRightCharsToExclude?: int<0, max>|null,
     *     DetectionParameters?: string|null,
     *     DetectionSensitivity?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
