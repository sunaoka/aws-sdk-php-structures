<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X12' $fileFormat
 * @property ConversionTargetFormatDetails|null $formatDetails
 * @property OutputSampleFileSource|null $outputSampleFile
 */
class ConversionTarget extends Shape
{
    /**
     * @param array{
     *     fileFormat: 'X12',
     *     formatDetails?: ConversionTargetFormatDetails|null,
     *     outputSampleFile?: OutputSampleFileSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
