<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transformerId
 * @property string $name
 * @property 'active'|'inactive' $status
 * @property 'XML'|'JSON'|'NOT_USED' $fileFormat
 * @property string $mappingTemplate
 * @property Shapes\EdiType $ediType
 * @property string $sampleDocument
 * @property Shapes\InputConversion $inputConversion
 * @property Shapes\Mapping $mapping
 * @property Shapes\OutputConversion $outputConversion
 * @property Shapes\SampleDocuments $sampleDocuments
 */
class UpdateTransformerRequest extends Request
{
    /**
     * @param array{
     *     transformerId: string,
     *     name?: string,
     *     status?: 'active'|'inactive',
     *     fileFormat?: 'XML'|'JSON'|'NOT_USED',
     *     mappingTemplate?: string,
     *     ediType?: Shapes\EdiType,
     *     sampleDocument?: string,
     *     inputConversion?: Shapes\InputConversion,
     *     mapping?: Shapes\Mapping,
     *     outputConversion?: Shapes\OutputConversion,
     *     sampleDocuments?: Shapes\SampleDocuments
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
