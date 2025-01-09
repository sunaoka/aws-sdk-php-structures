<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableFastLaunch;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ImageId
 * @property 'snapshot' $ResourceType
 * @property Shapes\FastLaunchSnapshotConfigurationResponse $SnapshotConfiguration
 * @property Shapes\FastLaunchLaunchTemplateSpecificationResponse $LaunchTemplate
 * @property int $MaxParallelLaunches
 * @property string $OwnerId
 * @property 'enabling'|'enabling-failed'|'enabled'|'enabled-failed'|'disabling'|'disabling-failed' $State
 * @property string $StateTransitionReason
 * @property \Aws\Api\DateTimeResult $StateTransitionTime
 */
class EnableFastLaunchResponse extends Response
{
}
