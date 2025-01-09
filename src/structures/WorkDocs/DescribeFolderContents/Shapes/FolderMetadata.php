<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeFolderContents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property string $CreatorId
 * @property string $ParentFolderId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $ModifiedTimestamp
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED' $ResourceState
 * @property string $Signature
 * @property list<string> $Labels
 * @property int $Size
 * @property int $LatestVersionSize
 */
class FolderMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     CreatorId?: string,
     *     ParentFolderId?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     ResourceState?: 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED',
     *     Signature?: string,
     *     Labels?: list<string>,
     *     Size?: int,
     *     LatestVersionSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
