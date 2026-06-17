<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateSecurityRequirementPack;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $packId
 * @property string|null $name
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED'|null $status
 */
class UpdateSecurityRequirementPackResponse extends Response
{
}
