<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AppImageConfigArn
 * @property string|null $AppImageConfigName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\KernelGatewayImageConfig|null $KernelGatewayImageConfig
 * @property Shapes\JupyterLabAppImageConfig|null $JupyterLabAppImageConfig
 * @property Shapes\CodeEditorAppImageConfig|null $CodeEditorAppImageConfig
 */
class DescribeAppImageConfigResponse extends Response
{
}
