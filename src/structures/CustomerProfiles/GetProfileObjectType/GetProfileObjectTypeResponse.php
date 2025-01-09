<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetProfileObjectType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ObjectTypeName
 * @property string $Description
 * @property string $TemplateId
 * @property int<1, 1098> $ExpirationDays
 * @property string $EncryptionKey
 * @property bool $AllowProfileCreation
 * @property string $SourceLastUpdatedTimestampFormat
 * @property int<0, max> $MaxAvailableProfileObjectCount
 * @property int<1, max> $MaxProfileObjectCount
 * @property array<string, Shapes\ObjectTypeField> $Fields
 * @property array<string, list<Shapes\ObjectTypeKey>> $Keys
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class GetProfileObjectTypeResponse extends Response
{
}
