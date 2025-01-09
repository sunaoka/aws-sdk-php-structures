<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutProfileObjectType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ObjectTypeName
 * @property string $Description
 * @property string $TemplateId
 * @property int $ExpirationDays
 * @property string $EncryptionKey
 * @property bool $AllowProfileCreation
 * @property string $SourceLastUpdatedTimestampFormat
 * @property int $MaxProfileObjectCount
 * @property int $MaxAvailableProfileObjectCount
 * @property array<string, Shapes\ObjectTypeField> $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>> $Keys
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class PutProfileObjectTypeResponse extends Response
{
}
