<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ConvertRecoveryPointToSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $recoveryPointId
 * @property int|null $retentionPeriod
 * @property string $snapshotName
 * @property list<Shapes\Tag>|null $tags
 */
class ConvertRecoveryPointToSnapshotRequest extends Request
{
    /**
     * @param array{
     *     recoveryPointId: string,
     *     retentionPeriod?: int|null,
     *     snapshotName: string,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
