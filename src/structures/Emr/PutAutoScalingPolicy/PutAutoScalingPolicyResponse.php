<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterId
 * @property string $InstanceGroupId
 * @property Shapes\AutoScalingPolicyDescription $AutoScalingPolicy
 * @property string $ClusterArn
 */
class PutAutoScalingPolicyResponse extends Response
{
}
