<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $transformerId
 * @property string $transformerArn
 * @property string $name
 * @property 'active'|'inactive' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 * @property 'XML'|'JSON'|'NOT_USED'|null $fileFormat
 * @property string|null $mappingTemplate
 * @property Shapes\EdiType|null $ediType
 * @property string|null $sampleDocument
 * @property Shapes\InputConversion|null $inputConversion
 * @property Shapes\Mapping|null $mapping
 * @property Shapes\OutputConversion|null $outputConversion
 * @property Shapes\SampleDocuments|null $sampleDocuments
 */
class GetTransformerResponse extends Response
{
}
