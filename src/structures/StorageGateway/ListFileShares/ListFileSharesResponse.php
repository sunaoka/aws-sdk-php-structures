<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileShares;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Marker
 * @property string|null $NextMarker
 * @property list<Shapes\FileShareInfo>|null $FileShareInfoList
 */
class ListFileSharesResponse extends Response
{
}
