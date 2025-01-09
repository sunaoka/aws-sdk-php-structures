<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $transformerId
 * @property string $transformerArn
 * @property string $name
 * @property 'active'|'inactive' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 * @property 'XML'|'JSON'|'NOT_USED' $fileFormat
 * @property string $mappingTemplate
 * @property Shapes\EdiType $ediType
 * @property string $sampleDocument
 * @property Shapes\InputConversion $inputConversion
 * @property Shapes\Mapping $mapping
 * @property Shapes\OutputConversion $outputConversion
 * @property Shapes\SampleDocuments $sampleDocuments
 */
class GetTransformerResponse extends Response
{
}
