<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableFastLaunch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ImageId
 * @property 'snapshot'|null $ResourceType
 * @property Shapes\FastLaunchSnapshotConfigurationResponse|null $SnapshotConfiguration
 * @property Shapes\FastLaunchLaunchTemplateSpecificationResponse|null $LaunchTemplate
 * @property int|null $MaxParallelLaunches
 * @property string|null $OwnerId
 * @property 'enabling'|'enabling-failed'|'enabled'|'enabled-failed'|'disabling'|'disabling-failed'|null $State
 * @property string|null $StateTransitionReason
 * @property \Aws\Api\DateTimeResult|null $StateTransitionTime
 */
class DisableFastLaunchResponse extends Response
{
}
