<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAppImageConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AppImageConfigArn
 * @property string $AppImageConfigName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\KernelGatewayImageConfig $KernelGatewayImageConfig
 * @property Shapes\JupyterLabAppImageConfig $JupyterLabAppImageConfig
 * @property Shapes\CodeEditorAppImageConfig $CodeEditorAppImageConfig
 */
class DescribeAppImageConfigResponse extends Response
{
}
