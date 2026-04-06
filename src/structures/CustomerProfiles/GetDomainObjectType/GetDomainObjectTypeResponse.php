<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetDomainObjectType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ObjectTypeName
 * @property string|null $Description
 * @property string|null $EncryptionKey
 * @property array<string, Shapes\DomainObjectTypeField>|null $Fields
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class GetDomainObjectTypeResponse extends Response
{
}
