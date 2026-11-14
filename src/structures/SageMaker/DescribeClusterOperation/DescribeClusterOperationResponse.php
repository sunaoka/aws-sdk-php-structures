<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterOperation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OperationId
 * @property string|null $ClusterArn
 * @property 'Scaling'|'DeepHealthCheck'|null $Type
 * @property 'InProgress'|'Superseded'|'Done'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property list<Shapes\ClusterOperationScalingDetails>|null $ScalingDetails
 * @property list<Shapes\InstanceGroupHealthCheckConfiguration>|null $DeepHealthCheckDetails
 */
class DescribeClusterOperationResponse extends Response
{
}
