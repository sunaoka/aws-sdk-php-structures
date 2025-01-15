<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Assigning
 * @property int|null $Booting
 * @property int|null $ConnectionLost
 * @property int|null $Deregistering
 * @property int|null $Online
 * @property int|null $Pending
 * @property int|null $Rebooting
 * @property int|null $Registered
 * @property int|null $Registering
 * @property int|null $Requested
 * @property int|null $RunningSetup
 * @property int|null $SetupFailed
 * @property int|null $ShuttingDown
 * @property int|null $StartFailed
 * @property int|null $StopFailed
 * @property int|null $Stopped
 * @property int|null $Stopping
 * @property int|null $Terminated
 * @property int|null $Terminating
 * @property int|null $Unassigning
 */
class InstancesCount extends Shape
{
    /**
     * @param array{
     *     Assigning?: int|null,
     *     Booting?: int|null,
     *     ConnectionLost?: int|null,
     *     Deregistering?: int|null,
     *     Online?: int|null,
     *     Pending?: int|null,
     *     Rebooting?: int|null,
     *     Registered?: int|null,
     *     Registering?: int|null,
     *     Requested?: int|null,
     *     RunningSetup?: int|null,
     *     SetupFailed?: int|null,
     *     ShuttingDown?: int|null,
     *     StartFailed?: int|null,
     *     StopFailed?: int|null,
     *     Stopped?: int|null,
     *     Stopping?: int|null,
     *     Terminated?: int|null,
     *     Terminating?: int|null,
     *     Unassigning?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
