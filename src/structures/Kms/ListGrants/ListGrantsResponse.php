<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\GrantListEntry>|null $Grants
 * @property string|null $NextMarker
 * @property bool|null $Truncated
 */
class ListGrantsResponse extends Response
{
}
