<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\GrantListEntry> $Grants
 * @property string $NextMarker
 * @property bool $Truncated
 */
class ListGrantsResponse extends Response
{
}
