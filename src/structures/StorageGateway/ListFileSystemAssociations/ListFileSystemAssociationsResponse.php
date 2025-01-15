<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileSystemAssociations;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Marker
 * @property string|null $NextMarker
 * @property list<Shapes\FileSystemAssociationSummary>|null $FileSystemAssociationSummaryList
 */
class ListFileSystemAssociationsResponse extends Response
{
}
