<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $CreatorId
 * @property string|null $ParentFolderId
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ModifiedTimestamp
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'|null $ResourceState
 * @property string|null $Signature
 * @property list<string>|null $Labels
 * @property int|null $Size
 * @property int|null $LatestVersionSize
 */
class FolderMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     CreatorId?: string|null,
     *     ParentFolderId?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ResourceState?: 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'|null,
     *     Signature?: string|null,
     *     Labels?: list<string>|null,
     *     Size?: int|null,
     *     LatestVersionSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
