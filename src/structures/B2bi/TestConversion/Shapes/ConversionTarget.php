<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X12' $fileFormat
 * @property ConversionTargetFormatDetails|null $formatDetails
 * @property OutputSampleFileSource|null $outputSampleFile
 * @property AdvancedOptions|null $advancedOptions
 */
class ConversionTarget extends Shape
{
    /**
     * @param array{
     *     fileFormat: 'X12',
     *     formatDetails?: ConversionTargetFormatDetails|null,
     *     outputSampleFile?: OutputSampleFileSource|null,
     *     advancedOptions?: AdvancedOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
