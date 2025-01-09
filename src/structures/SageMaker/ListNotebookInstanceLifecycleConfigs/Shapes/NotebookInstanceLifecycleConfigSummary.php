<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListNotebookInstanceLifecycleConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 * @property string $NotebookInstanceLifecycleConfigArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class NotebookInstanceLifecycleConfigSummary extends Shape
{
    /**
     * @param array{
     *     NotebookInstanceLifecycleConfigName: string,
     *     NotebookInstanceLifecycleConfigArn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
