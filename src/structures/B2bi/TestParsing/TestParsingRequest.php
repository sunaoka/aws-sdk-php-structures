<?php

namespace Sunaoka\Aws\Structures\B2bi\TestParsing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\S3Location $inputFile
 * @property 'XML'|'JSON'|'NOT_USED' $fileFormat
 * @property Shapes\EdiType $ediType
 * @property Shapes\AdvancedOptions|null $advancedOptions
 */
class TestParsingRequest extends Request
{
    /**
     * @param array{
     *     inputFile: Shapes\S3Location,
     *     fileFormat: 'XML'|'JSON'|'NOT_USED',
     *     ediType: Shapes\EdiType,
     *     advancedOptions?: Shapes\AdvancedOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
