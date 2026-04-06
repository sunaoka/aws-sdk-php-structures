<?php

namespace Sunaoka\Aws\Structures\B2bi\GetTransformer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $transformerId
 * @property string $transformerArn
 * @property string $name
 * @property 'XML'|'JSON' $fileFormat
 * @property string $mappingTemplate
 * @property 'active'|'inactive' $status
 * @property Shapes\EdiType $ediType
 * @property string|null $sampleDocument
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class GetTransformerResponse extends Response
{
}
