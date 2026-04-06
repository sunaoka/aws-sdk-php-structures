<?php

namespace Sunaoka\Aws\Structures\B2bi\TestParsing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\S3Location $inputFile
 * @property 'XML'|'JSON' $fileFormat
 * @property Shapes\EdiType $ediType
 */
class TestParsingRequest extends Request
{
    /**
     * @param array{
     *     inputFile: Shapes\S3Location,
     *     fileFormat: 'XML'|'JSON',
     *     ediType: Shapes\EdiType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
