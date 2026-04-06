<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeStudioLifecycleConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $StudioLifecycleConfigArn
 * @property string|null $StudioLifecycleConfigName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $StudioLifecycleConfigContent
 * @property 'JupyterServer'|'KernelGateway'|'CodeEditor'|'JupyterLab'|null $StudioLifecycleConfigAppType
 */
class DescribeStudioLifecycleConfigResponse extends Response
{
}
