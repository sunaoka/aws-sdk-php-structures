<?php

namespace Sunaoka\Aws\Structures\Kms\ListAliases;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AliasListEntry>|null $Aliases
 * @property string|null $NextMarker
 * @property bool|null $Truncated
 */
class ListAliasesResponse extends Response
{
}
