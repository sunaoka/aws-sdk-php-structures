<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\UpdateConnectionPreferences;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Arn
 * @property 'ALLOW_ALL'|'DENY_ALL'|'ALLOW_BY_DEFAULT_DENY_SOME' $AccessType
 * @property list<string>|null $ExcludedParticipantIds
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property int $Revision
 */
class UpdateConnectionPreferencesResponse extends Response
{
}
