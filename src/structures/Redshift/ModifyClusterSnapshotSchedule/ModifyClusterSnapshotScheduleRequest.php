<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshotSchedule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ScheduleIdentifier
 * @property bool $DisassociateSchedule
 */
class ModifyClusterSnapshotScheduleRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     ScheduleIdentifier?: string,
     *     DisassociateSchedule?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
