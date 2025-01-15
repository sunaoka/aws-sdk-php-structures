<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 * @property 'XML'|'JSON'|'NOT_USED'|null $fileFormat
 * @property string|null $mappingTemplate
 * @property Shapes\EdiType|null $ediType
 * @property string|null $sampleDocument
 * @property Shapes\InputConversion|null $inputConversion
 * @property Shapes\Mapping|null $mapping
 * @property Shapes\OutputConversion|null $outputConversion
 * @property Shapes\SampleDocuments|null $sampleDocuments
 */
class CreateTransformerRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null,
     *     fileFormat?: 'XML'|'JSON'|'NOT_USED'|null,
     *     mappingTemplate?: string|null,
     *     ediType?: Shapes\EdiType|null,
     *     sampleDocument?: string|null,
     *     inputConversion?: Shapes\InputConversion|null,
     *     mapping?: Shapes\Mapping|null,
     *     outputConversion?: Shapes\OutputConversion|null,
     *     sampleDocuments?: Shapes\SampleDocuments|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
