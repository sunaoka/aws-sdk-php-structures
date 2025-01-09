<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string $IntegrationArn
 * @property string $KMSKeyId
 * @property array<string, string> $AdditionalEncryptionContext
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention' $Status
 * @property list<Shapes\Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<Shapes\IntegrationError> $Errors
 * @property string $DataFilter
 * @property string $Description
 */
class ModifyIntegrationResponse extends Response
{
}
