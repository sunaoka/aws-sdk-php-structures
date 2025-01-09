<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Assigning
 * @property int $Booting
 * @property int $ConnectionLost
 * @property int $Deregistering
 * @property int $Online
 * @property int $Pending
 * @property int $Rebooting
 * @property int $Registered
 * @property int $Registering
 * @property int $Requested
 * @property int $RunningSetup
 * @property int $SetupFailed
 * @property int $ShuttingDown
 * @property int $StartFailed
 * @property int $StopFailed
 * @property int $Stopped
 * @property int $Stopping
 * @property int $Terminated
 * @property int $Terminating
 * @property int $Unassigning
 */
class InstancesCount extends Shape
{
    /**
     * @param array{
     *     Assigning?: int,
     *     Booting?: int,
     *     ConnectionLost?: int,
     *     Deregistering?: int,
     *     Online?: int,
     *     Pending?: int,
     *     Rebooting?: int,
     *     Registered?: int,
     *     Registering?: int,
     *     Requested?: int,
     *     RunningSetup?: int,
     *     SetupFailed?: int,
     *     ShuttingDown?: int,
     *     StartFailed?: int,
     *     StopFailed?: int,
     *     Stopped?: int,
     *     Stopping?: int,
     *     Terminated?: int,
     *     Terminating?: int,
     *     Unassigning?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
