<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ConvertRecoveryPointToSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPointId
 * @property int $retentionPeriod
 * @property string $snapshotName
 * @property list<Shapes\Tag> $tags
 */
class ConvertRecoveryPointToSnapshotRequest extends Request
{
    /**
     * @param array{
     *     recoveryPointId: string,
     *     retentionPeriod?: int,
     *     snapshotName: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
