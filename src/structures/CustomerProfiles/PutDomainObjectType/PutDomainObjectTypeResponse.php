<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\PutDomainObjectType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ObjectTypeName
 * @property string|null $Description
 * @property string|null $EncryptionKey
 * @property array<string, Shapes\DomainObjectTypeField>|null $Fields
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class PutDomainObjectTypeResponse extends Response
{
}
