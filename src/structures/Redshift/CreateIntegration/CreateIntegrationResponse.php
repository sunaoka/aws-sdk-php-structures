<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $IntegrationArn
 * @property string $IntegrationName
 * @property string $SourceArn
 * @property string $TargetArn
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention' $Status
 * @property list<Shapes\IntegrationError> $Errors
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $Description
 * @property string $KMSKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property list<Shapes\Tag> $Tags
 */
class CreateIntegrationResponse extends Response
{
}
