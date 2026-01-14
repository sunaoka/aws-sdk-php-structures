<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateGlossary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $domainId
 * @property string $id
 * @property string $name
 * @property string $owningProjectId
 * @property string|null $description
 * @property 'DISABLED'|'ENABLED'|null $status
 * @property list<'ASSET_GOVERNED_TERMS'>|null $usageRestrictions
 */
class CreateGlossaryResponse extends Response
{
}
