<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $transformerId
 * @property string|null $name
 * @property 'active'|'inactive'|null $status
 * @property 'XML'|'JSON'|'NOT_USED'|null $fileFormat
 * @property string|null $mappingTemplate
 * @property Shapes\EdiType|null $ediType
 * @property string|null $sampleDocument
 * @property Shapes\InputConversion|null $inputConversion
 * @property Shapes\Mapping|null $mapping
 * @property Shapes\OutputConversion|null $outputConversion
 * @property Shapes\SampleDocuments|null $sampleDocuments
 */
class UpdateTransformerRequest extends Request
{
    /**
     * @param array{
     *     transformerId: string,
     *     name?: string|null,
     *     status?: 'active'|'inactive'|null,
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
