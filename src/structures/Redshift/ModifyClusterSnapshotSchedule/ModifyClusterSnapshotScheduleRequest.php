<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string|null $ScheduleIdentifier
 * @property bool|null $DisassociateSchedule
 */
class ModifyClusterSnapshotScheduleRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     ScheduleIdentifier?: string|null,
     *     DisassociateSchedule?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
