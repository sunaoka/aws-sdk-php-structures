<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListNotebookInstanceLifecycleConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotebookInstanceLifecycleConfigName
 * @property string $NotebookInstanceLifecycleConfigArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class NotebookInstanceLifecycleConfigSummary extends Shape
{
    /**
     * @param array{
     *     NotebookInstanceLifecycleConfigName: string,
     *     NotebookInstanceLifecycleConfigArn: string,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
