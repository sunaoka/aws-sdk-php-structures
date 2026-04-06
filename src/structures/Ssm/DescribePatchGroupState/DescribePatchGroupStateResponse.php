<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribePatchGroupState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $Instances
 * @property int|null $InstancesWithInstalledPatches
 * @property int|null $InstancesWithInstalledOtherPatches
 * @property int|null $InstancesWithInstalledPendingRebootPatches
 * @property int|null $InstancesWithInstalledRejectedPatches
 * @property int|null $InstancesWithMissingPatches
 * @property int|null $InstancesWithFailedPatches
 * @property int|null $InstancesWithNotApplicablePatches
 * @property int|null $InstancesWithUnreportedNotApplicablePatches
 * @property int|null $InstancesWithCriticalNonCompliantPatches
 * @property int|null $InstancesWithSecurityNonCompliantPatches
 * @property int|null $InstancesWithOtherNonCompliantPatches
 * @property int|null $InstancesWithAvailableSecurityUpdates
 */
class DescribePatchGroupStateResponse extends Response
{
}
