<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $SegmentDefinitionName
 * @property string $SnapshotId
 */
class GetSegmentSnapshotRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     SegmentDefinitionName: string,
     *     SnapshotId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
