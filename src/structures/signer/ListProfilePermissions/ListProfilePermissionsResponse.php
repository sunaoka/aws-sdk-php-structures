<?php

namespace Sunaoka\Aws\Structures\signer\ListProfilePermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $revisionId
 * @property int|null $policySizeBytes
 * @property list<Shapes\Permission>|null $permissions
 * @property string|null $nextToken
 */
class ListProfilePermissionsResponse extends Response
{
}
