<?php

namespace Sunaoka\Aws\Structures\Glue\GetUnfilteredPartitionMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Partition|null $Partition
 * @property list<string>|null $AuthorizedColumns
 * @property bool|null $IsRegisteredWithLakeFormation
 */
class GetUnfilteredPartitionMetadataResponse extends Response
{
}
