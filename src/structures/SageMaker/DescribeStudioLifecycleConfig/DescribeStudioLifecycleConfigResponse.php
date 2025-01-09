<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeStudioLifecycleConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $StudioLifecycleConfigArn
 * @property string $StudioLifecycleConfigName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $StudioLifecycleConfigContent
 * @property 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab' $StudioLifecycleConfigAppType
 */
class DescribeStudioLifecycleConfigResponse extends Response
{
}
