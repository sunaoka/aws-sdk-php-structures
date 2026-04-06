<?php

namespace Sunaoka\Aws\Structures\NovaAct\GetWorkflowDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3BucketName
 * @property string|null $s3KeyPrefix
 */
class WorkflowExportConfig extends Shape
{
    /**
     * @param array{
     *     s3BucketName: string,
     *     s3KeyPrefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
