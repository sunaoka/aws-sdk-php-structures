<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $transformerId
 * @property string $name
 * @property 'active'|'inactive' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property 'XML'|'JSON'|'NOT_USED' $fileFormat
 * @property string $mappingTemplate
 * @property EdiType $ediType
 * @property string $sampleDocument
 * @property InputConversion $inputConversion
 * @property Mapping $mapping
 * @property OutputConversion $outputConversion
 * @property SampleDocuments $sampleDocuments
 */
class TransformerSummary extends Shape
{
    /**
     * @param array{
     *     transformerId: string,
     *     name: string,
     *     status: 'active'|'inactive',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult,
     *     fileFormat?: 'XML'|'JSON'|'NOT_USED',
     *     mappingTemplate?: string,
     *     ediType?: EdiType,
     *     sampleDocument?: string,
     *     inputConversion?: InputConversion,
     *     mapping?: Mapping,
     *     outputConversion?: OutputConversion,
     *     sampleDocuments?: SampleDocuments
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
