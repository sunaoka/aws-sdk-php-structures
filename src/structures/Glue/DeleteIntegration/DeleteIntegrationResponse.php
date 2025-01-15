<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SourceArn
 * @property string $TargetArn
 * @property string $IntegrationName
 * @property string|null $Description
 * @property string $IntegrationArn
 * @property string|null $KmsKeyId
 * @property array<string, string>|null $AdditionalEncryptionContext
 * @property list<Shapes\Tag>|null $Tags
 * @property 'CREATING'|'ACTIVE'|'MODIFYING'|'FAILED'|'DELETING'|'SYNCING'|'NEEDS_ATTENTION' $Status
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property list<Shapes\IntegrationError>|null $Errors
 * @property string|null $DataFilter
 */
class DeleteIntegrationResponse extends Response
{
}
