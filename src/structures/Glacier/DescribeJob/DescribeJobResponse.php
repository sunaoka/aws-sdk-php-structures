<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $JobId
 * @property string $JobDescription
 * @property 'ArchiveRetrieval'|'InventoryRetrieval'|'Select' $Action
 * @property string $ArchiveId
 * @property string $VaultARN
 * @property string $CreationDate
 * @property bool $Completed
 * @property 'InProgress'|'Succeeded'|'Failed' $StatusCode
 * @property string $StatusMessage
 * @property int $ArchiveSizeInBytes
 * @property int $InventorySizeInBytes
 * @property string $SNSTopic
 * @property string $CompletionDate
 * @property string $SHA256TreeHash
 * @property string $ArchiveSHA256TreeHash
 * @property string $RetrievalByteRange
 * @property string $Tier
 * @property Shapes\InventoryRetrievalJobDescription $InventoryRetrievalParameters
 * @property string $JobOutputPath
 * @property Shapes\SelectParameters $SelectParameters
 * @property Shapes\OutputLocation $OutputLocation
 */
class DescribeJobResponse extends Response
{
}
