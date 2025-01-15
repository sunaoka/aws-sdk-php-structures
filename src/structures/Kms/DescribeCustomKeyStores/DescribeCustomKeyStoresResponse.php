<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CustomKeyStoresListEntry>|null $CustomKeyStores
 * @property string|null $NextMarker
 * @property bool|null $Truncated
 */
class DescribeCustomKeyStoresResponse extends Response
{
}
