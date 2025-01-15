<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $CreatorId
 * @property string|null $ParentFolderId
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $ModifiedTimestamp
 * @property DocumentVersionMetadata|null $LatestVersionMetadata
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'|null $ResourceState
 * @property list<string>|null $Labels
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     CreatorId?: string|null,
     *     ParentFolderId?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     LatestVersionMetadata?: DocumentVersionMetadata|null,
     *     ResourceState?: 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED'|null,
     *     Labels?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
