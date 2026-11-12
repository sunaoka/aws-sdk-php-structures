<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\ListSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceApplicationName
 * @property 'USER'|'SYSTEM'|null $SnapshotInitiator
 * @property 'CreateSnapshot'|'ImportSnapshot'|'SystemCreateSnapshot'|null $SnapshotInitiatorOperation
 * @property 'CREATING'|'READY'|'DELETING'|'FAILED'|null $SnapshotStatus
 * @property int<1, 50>|null $Limit
 * @property string|null $NextToken
 */
class ListSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     SourceApplicationName?: string|null,
     *     SnapshotInitiator?: 'USER'|'SYSTEM'|null,
     *     SnapshotInitiatorOperation?: 'CreateSnapshot'|'ImportSnapshot'|'SystemCreateSnapshot'|null,
     *     SnapshotStatus?: 'CREATING'|'READY'|'DELETING'|'FAILED'|null,
     *     Limit?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
