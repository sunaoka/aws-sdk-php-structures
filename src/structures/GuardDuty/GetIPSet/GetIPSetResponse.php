<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetIPSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property 'TXT'|'STIX'|'OTX_CSV'|'ALIEN_VAULT'|'PROOF_POINT'|'FIRE_EYE' $Format
 * @property string $Location
 * @property 'INACTIVE'|'ACTIVATING'|'ACTIVE'|'DEACTIVATING'|'ERROR'|'DELETE_PENDING'|'DELETED' $Status
 * @property array<string, string>|null $Tags
 * @property string|null $ExpectedBucketOwner
 */
class GetIPSetResponse extends Response
{
}
