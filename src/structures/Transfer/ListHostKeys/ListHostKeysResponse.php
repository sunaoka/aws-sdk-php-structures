<?php

namespace Sunaoka\Aws\Structures\Transfer\ListHostKeys;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NextToken
 * @property string $ServerId
 * @property list<Shapes\ListedHostKey> $HostKeys
 */
class ListHostKeysResponse extends Response
{
}
