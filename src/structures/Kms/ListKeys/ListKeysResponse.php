<?php

namespace Sunaoka\Aws\Structures\Kms\ListKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\KeyListEntry> $Keys
 * @property string $NextMarker
 * @property bool $Truncated
 */
class ListKeysResponse extends Response
{
}
