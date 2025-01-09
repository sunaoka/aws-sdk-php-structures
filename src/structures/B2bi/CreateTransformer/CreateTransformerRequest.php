<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $clientToken
 * @property list<Shapes\Tag> $tags
 * @property 'XML'|'JSON'|'NOT_USED' $fileFormat
 * @property string $mappingTemplate
 * @property Shapes\EdiType $ediType
 * @property string $sampleDocument
 * @property Shapes\InputConversion $inputConversion
 * @property Shapes\Mapping $mapping
 * @property Shapes\OutputConversion $outputConversion
 * @property Shapes\SampleDocuments $sampleDocuments
 */
class CreateTransformerRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     clientToken?: string,
     *     tags?: list<Shapes\Tag>,
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
