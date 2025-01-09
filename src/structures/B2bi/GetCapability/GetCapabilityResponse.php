<?php

namespace Sunaoka\Aws\Structures\B2bi\GetCapability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $capabilityId
 * @property string $capabilityArn
 * @property string $name
 * @property 'edi' $type
 * @property Shapes\CapabilityConfiguration $configuration
 * @property list<Shapes\S3Location> $instructionsDocuments
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $modifiedAt
 */
class GetCapabilityResponse extends Response
{
}
