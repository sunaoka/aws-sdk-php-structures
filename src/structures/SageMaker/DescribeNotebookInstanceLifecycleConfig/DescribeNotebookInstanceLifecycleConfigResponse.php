<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeNotebookInstanceLifecycleConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $NotebookInstanceLifecycleConfigArn
 * @property string|null $NotebookInstanceLifecycleConfigName
 * @property list<Shapes\NotebookInstanceLifecycleHook>|null $OnCreate
 * @property list<Shapes\NotebookInstanceLifecycleHook>|null $OnStart
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class DescribeNotebookInstanceLifecycleConfigResponse extends Response
{
}
