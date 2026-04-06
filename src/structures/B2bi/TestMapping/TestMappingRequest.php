<?php

namespace Sunaoka\Aws\Structures\B2bi\TestMapping;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $inputFileContent
 * @property string $mappingTemplate
 * @property 'XML'|'JSON'|'NOT_USED' $fileFormat
 */
class TestMappingRequest extends Request
{
    /**
     * @param array{
     *     inputFileContent: string,
     *     mappingTemplate: string,
     *     fileFormat: 'XML'|'JSON'|'NOT_USED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
