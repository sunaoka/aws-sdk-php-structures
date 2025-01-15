<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transformerId
 * @property string $name
 * @property 'active'|'inactive' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property 'XML'|'JSON'|'NOT_USED'|null $fileFormat
 * @property string|null $mappingTemplate
 * @property EdiType|null $ediType
 * @property string|null $sampleDocument
 * @property InputConversion|null $inputConversion
 * @property Mapping|null $mapping
 * @property OutputConversion|null $outputConversion
 * @property SampleDocuments|null $sampleDocuments
 */
class TransformerSummary extends Shape
{
    /**
     * @param array{
     *     transformerId: string,
     *     name: string,
     *     status: 'active'|'inactive',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null,
     *     fileFormat?: 'XML'|'JSON'|'NOT_USED'|null,
     *     mappingTemplate?: string|null,
     *     ediType?: EdiType|null,
     *     sampleDocument?: string|null,
     *     inputConversion?: InputConversion|null,
     *     mapping?: Mapping|null,
     *     outputConversion?: OutputConversion|null,
     *     sampleDocuments?: SampleDocuments|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
