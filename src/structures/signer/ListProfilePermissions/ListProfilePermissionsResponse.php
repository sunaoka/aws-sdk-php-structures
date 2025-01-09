<?php

namespace Sunaoka\Aws\Structures\signer\ListProfilePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $revisionId
 * @property int $policySizeBytes
 * @property list<Shapes\Permission> $permissions
 * @property string $nextToken
 */
class ListProfilePermissionsResponse extends Response
{
}
