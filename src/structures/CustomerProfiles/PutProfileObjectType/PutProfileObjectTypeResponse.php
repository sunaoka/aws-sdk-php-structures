<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutProfileObjectType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ObjectTypeName
 * @property string $Description
 * @property string|null $TemplateId
 * @property int<1, 1098>|null $ExpirationDays
 * @property string|null $EncryptionKey
 * @property bool|null $AllowProfileCreation
 * @property string|null $SourceLastUpdatedTimestampFormat
 * @property int<1, max>|null $MaxProfileObjectCount
 * @property int<0, max>|null $MaxAvailableProfileObjectCount
 * @property int<1, max>|null $SourcePriority
 * @property array<string, Shapes\ObjectTypeField>|null $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>>|null $Keys
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class PutProfileObjectTypeResponse extends Response
{
}
