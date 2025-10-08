<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetThreatEntitySet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property 'TXT'|'STIX'|'OTX_CSV'|'ALIEN_VAULT'|'PROOF_POINT'|'FIRE_EYE' $Format
 * @property string $Location
 * @property string|null $ExpectedBucketOwner
 * @property 'INACTIVE'|'ACTIVATING'|'ACTIVE'|'DEACTIVATING'|'ERROR'|'DELETE_PENDING'|'DELETED' $Status
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $ErrorDetails
 */
class GetThreatEntitySetResponse extends Response
{
}
