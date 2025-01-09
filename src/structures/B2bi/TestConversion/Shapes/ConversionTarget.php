<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X12' $fileFormat
 * @property ConversionTargetFormatDetails $formatDetails
 * @property OutputSampleFileSource $outputSampleFile
 */
class ConversionTarget extends Shape
{
    /**
     * @param array{
     *     fileFormat: 'X12',
     *     formatDetails?: ConversionTargetFormatDetails,
     *     outputSampleFile?: OutputSampleFileSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
