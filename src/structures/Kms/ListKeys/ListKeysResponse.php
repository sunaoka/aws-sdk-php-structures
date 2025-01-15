<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\KeyListEntry>|null $Keys
 * @property string|null $NextMarker
 * @property bool|null $Truncated
 */
class ListKeysResponse extends Response
{
}
