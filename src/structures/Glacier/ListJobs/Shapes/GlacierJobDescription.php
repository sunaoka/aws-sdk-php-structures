<?php

namespace Sunaoka\Aws\Structures\Glacier\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
 * @property InventoryRetrievalJobDescription $InventoryRetrievalParameters
 * @property string $JobOutputPath
 * @property SelectParameters $SelectParameters
 * @property OutputLocation $OutputLocation
 */
class GlacierJobDescription extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     JobDescription?: string,
     *     Action?: 'ArchiveRetrieval'|'InventoryRetrieval'|'Select',
     *     ArchiveId?: string,
     *     VaultARN?: string,
     *     CreationDate?: string,
     *     Completed?: bool,
     *     StatusCode?: 'InProgress'|'Succeeded'|'Failed',
     *     StatusMessage?: string,
     *     ArchiveSizeInBytes?: int,
     *     InventorySizeInBytes?: int,
     *     SNSTopic?: string,
     *     CompletionDate?: string,
     *     SHA256TreeHash?: string,
     *     ArchiveSHA256TreeHash?: string,
     *     RetrievalByteRange?: string,
     *     Tier?: string,
     *     InventoryRetrievalParameters?: InventoryRetrievalJobDescription,
     *     JobOutputPath?: string,
     *     SelectParameters?: SelectParameters,
     *     OutputLocation?: OutputLocation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
