<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateGlossary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $description
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 */
class UpdateGlossaryResponse extends Response
{
}
