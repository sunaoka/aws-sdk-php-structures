<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileSystemAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Marker
 * @property string $NextMarker
 * @property list<Shapes\FileSystemAssociationSummary> $FileSystemAssociationSummaryList
 */
class ListFileSystemAssociationsResponse extends Response
{
}
