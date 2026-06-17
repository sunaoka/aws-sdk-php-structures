<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateSecurityRequirementPack;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $packId
 * @property 'ENABLED'|'DISABLED' $status
 * @property string|null $kmsKeyId
 */
class CreateSecurityRequirementPackResponse extends Response
{
}
