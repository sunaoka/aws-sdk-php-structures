<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRouter;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InferenceRouterName
 * @property string $InferenceRouterArn
 * @property list<Shapes\RoutingTarget> $RoutingTargets
 * @property 'InService'|'Creating'|'Updating'|'Failed'|'Deleting' $Status
 * @property string|null $StatusReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeInferenceRouterResponse extends Response
{
}
