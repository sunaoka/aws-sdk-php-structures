<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CreatorId
 * @property string $ParentFolderId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $ModifiedTimestamp
 * @property DocumentVersionMetadata $LatestVersionMetadata
 * @property 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED' $ResourceState
 * @property list<string> $Labels
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     CreatorId?: string,
     *     ParentFolderId?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     LatestVersionMetadata?: DocumentVersionMetadata,
     *     ResourceState?: 'ACTIVE'|'RESTORING'|'RECYCLING'|'RECYCLED',
     *     Labels?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
