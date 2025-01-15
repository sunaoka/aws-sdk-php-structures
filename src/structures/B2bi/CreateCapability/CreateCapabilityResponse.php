<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateCapability;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $capabilityId
 * @property string $capabilityArn
 * @property string $name
 * @property 'edi' $type
 * @property Shapes\CapabilityConfiguration $configuration
 * @property list<Shapes\S3Location>|null $instructionsDocuments
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateCapabilityResponse extends Response
{
}
