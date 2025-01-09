<?php

namespace Sunaoka\Aws\Structures\Kms\ListRetirableGrants;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\GrantListEntry> $Grants
 * @property string $NextMarker
 * @property bool $Truncated
 */
class ListRetirableGrantsResponse extends Response
{
}
