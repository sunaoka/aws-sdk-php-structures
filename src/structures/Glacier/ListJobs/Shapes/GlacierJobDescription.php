<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property InventoryRetrievalJobDescription|null $InventoryRetrievalParameters
 * @property string|null $JobOutputPath
 * @property SelectParameters|null $SelectParameters
 * @property OutputLocation|null $OutputLocation
 */
class GlacierJobDescription extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     JobDescription?: string|null,
     *     Action?: 'ArchiveRetrieval'|'InventoryRetrieval'|'Select'|null,
     *     ArchiveId?: string|null,
     *     VaultARN?: string|null,
     *     CreationDate?: string|null,
     *     Completed?: bool|null,
     *     StatusCode?: 'InProgress'|'Succeeded'|'Failed'|null,
     *     StatusMessage?: string|null,
     *     ArchiveSizeInBytes?: int|null,
     *     InventorySizeInBytes?: int|null,
     *     SNSTopic?: string|null,
     *     CompletionDate?: string|null,
     *     SHA256TreeHash?: string|null,
     *     ArchiveSHA256TreeHash?: string|null,
     *     RetrievalByteRange?: string|null,
     *     Tier?: string|null,
     *     InventoryRetrievalParameters?: InventoryRetrievalJobDescription|null,
     *     JobOutputPath?: string|null,
     *     SelectParameters?: SelectParameters|null,
     *     OutputLocation?: OutputLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
