<?php

namespace Sunaoka\Aws\Structures\B2bi\GenerateMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputFileContent
 * @property string $outputFileContent
 * @property 'JSONATA'|'XSLT' $mappingType
 */
class GenerateMappingRequest extends Request
{
    /**
     * @param array{
     *     inputFileContent: string,
     *     outputFileContent: string,
     *     mappingType: 'JSONATA'|'XSLT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
