<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateStarterMappingTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\S3Location|null $outputSampleLocation
 * @property 'JSONATA'|'XSLT' $mappingType
 * @property Shapes\TemplateDetails $templateDetails
 */
class CreateStarterMappingTemplateRequest extends Request
{
    /**
     * @param array{
     *     outputSampleLocation?: Shapes\S3Location|null,
     *     mappingType: 'JSONATA'|'XSLT',
     *     templateDetails: Shapes\TemplateDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
