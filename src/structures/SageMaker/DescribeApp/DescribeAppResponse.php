<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AppArn
 * @property 'JupyterServer'|'KernelGateway'|'DetailedProfiler'|'TensorBoard'|'CodeEditor'|'JupyterLab'|'RStudioServerPro'|'RSessionGateway'|'Canvas'|null $AppType
 * @property string|null $AppName
 * @property string|null $DomainId
 * @property string|null $UserProfileName
 * @property string|null $SpaceName
 * @property 'Deleted'|'Deleting'|'Failed'|'InService'|'Pending'|null $Status
 * @property bool|null $RecoveryMode
 * @property \Aws\Api\DateTimeResult|null $LastHealthCheckTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastUserActivityTimestamp
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FailureReason
 * @property Shapes\ResourceSpec|null $ResourceSpec
 * @property string|null $BuiltInLifecycleConfigArn
 */
class DescribeAppResponse extends Response
{
}
