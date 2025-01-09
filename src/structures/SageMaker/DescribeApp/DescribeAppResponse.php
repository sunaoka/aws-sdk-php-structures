<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AppArn
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas' $AppType
 * @property string $AppName
 * @property string $DomainId
 * @property string $UserProfileName
 * @property string $SpaceName
 * @property 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending' $Status
 * @property \Aws\Api\DateTimeResult $LastHealthCheckTimestamp
 * @property \Aws\Api\DateTimeResult $LastUserActivityTimestamp
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 * @property Shapes\ResourceSpec $ResourceSpec
 * @property string $BuiltInLifecycleConfigArn
 */
class DescribeAppResponse extends Response
{
}
