<?php

namespace Sunaoka\Aws\Structures\Glue\CreateIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string $Description
 * @property string $IntegrationArn
 * @property string $KmsKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property list<Shapes\Tag> $Tags
 * @property 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION' $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<Shapes\IntegrationError> $Errors
 * @property string $DataFilter
 */
class CreateIntegrationResponse extends Response
{
}
