<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ClusterId
 * @property string|null $InstanceGroupId
 * @property Shapes\AutoScalingPolicyDescription|null $AutoScalingPolicy
 * @property string|null $ClusterArn
 */
class PutAutoScalingPolicyResponse extends Response
{
}
