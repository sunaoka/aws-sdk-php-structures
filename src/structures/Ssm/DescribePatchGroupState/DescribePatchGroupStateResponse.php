<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroupState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $Instances
 * @property int $InstancesWithInstalledPatches
 * @property int $InstancesWithInstalledOtherPatches
 * @property int $InstancesWithInstalledPendingRebootPatches
 * @property int $InstancesWithInstalledRejectedPatches
 * @property int $InstancesWithMissingPatches
 * @property int $InstancesWithFailedPatches
 * @property int $InstancesWithNotApplicablePatches
 * @property int $InstancesWithUnreportedNotApplicablePatches
 * @property int $InstancesWithCriticalNonCompliantPatches
 * @property int $InstancesWithSecurityNonCompliantPatches
 * @property int $InstancesWithOtherNonCompliantPatches
 */
class DescribePatchGroupStateResponse extends Response
{
}
