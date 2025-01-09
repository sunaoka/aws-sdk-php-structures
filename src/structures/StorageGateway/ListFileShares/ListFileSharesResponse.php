<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileShares;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Marker
 * @property string $NextMarker
 * @property list<Shapes\FileShareInfo> $FileShareInfoList
 */
class ListFileSharesResponse extends Response
{
}
