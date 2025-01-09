<?php

namespace Sunaoka\Aws\Structures\Kms\DescribeCustomKeyStores;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\CustomKeyStoresListEntry> $CustomKeyStores
 * @property string $NextMarker
 * @property bool $Truncated
 */
class DescribeCustomKeyStoresResponse extends Response
{
}
