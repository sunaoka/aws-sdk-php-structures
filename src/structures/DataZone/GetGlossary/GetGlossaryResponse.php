<?php

namespace Sunaoka\Aws\Structures\DataZone\GetGlossary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property string $owningProjectId
 * @property string $name
 * @property string|null $description
 * @property 'DISABLED'|'ENABLED' $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 */
class GetGlossaryResponse extends Response
{
}
