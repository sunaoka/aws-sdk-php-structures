<?php

namespace Sunaoka\Aws\Structures\Rds\CreateIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $SourceArn
 * @property string|null $TargetArn
 * @property string|null $IntegrationName
 * @property string|null $IntegrationArn
 * @property string|null $KMSKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property 'creating'|'active'|'modifying'|'failed'|'deleting'|'syncing'|'needs_attention'|null $Status
 * @property list<Shapes\Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property list<Shapes\IntegrationError>|null $Errors
 * @property string|null $DataFilter
 * @property string|null $Description
 */
class CreateIntegrationResponse extends Response
{
}
