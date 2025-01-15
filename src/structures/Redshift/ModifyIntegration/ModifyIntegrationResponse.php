<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $IntegrationArn
 * @property string|null $IntegrationName
 * @property string|null $SourceArn
 * @property string|null $TargetArn
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null $Status
 * @property list<Shapes\IntegrationError>|null $Errors
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property string|null $Description
 * @property string|null $KMSKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property list<Shapes\Tag>|null $Tags
 */
class ModifyIntegrationResponse extends Response
{
}
