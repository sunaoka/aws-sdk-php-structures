<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $NotebookInstanceLifecycleConfigArn
 * @property string $NotebookInstanceLifecycleConfigName
 * @property list<Shapes\NotebookInstanceLifecycleHook> $OnCreate
 * @property list<Shapes\NotebookInstanceLifecycleHook> $OnStart
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeNotebookInstanceLifecycleConfigResponse extends Response
{
}
