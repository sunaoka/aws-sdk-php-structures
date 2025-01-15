<?php

namespace Sunaoka\Aws\Structures\Glacier\DescribeJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $JobId
 * @property string|null $JobDescription
 * @property 'ArchiveRetrieval'|'InventoryRetrieval'|'Select'|null $Action
 * @property string|null $ArchiveId
 * @property string|null $VaultARN
 * @property string|null $CreationDate
 * @property bool|null $Completed
 * @property 'InProgress'|'Succeeded'|'Failed'|null $StatusCode
 * @property string|null $StatusMessage
 * @property int|null $ArchiveSizeInBytes
 * @property int|null $InventorySizeInBytes
 * @property string|null $SNSTopic
 * @property string|null $CompletionDate
 * @property string|null $SHA256TreeHash
 * @property string|null $ArchiveSHA256TreeHash
 * @property string|null $RetrievalByteRange
 * @property string|null $Tier
 * @property Shapes\InventoryRetrievalJobDescription|null $InventoryRetrievalParameters
 * @property string|null $JobOutputPath
 * @property Shapes\SelectParameters|null $SelectParameters
 * @property Shapes\OutputLocation|null $OutputLocation
 */
class DescribeJobResponse extends Response
{
}
