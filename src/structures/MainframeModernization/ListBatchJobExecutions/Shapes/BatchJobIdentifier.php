<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileBatchJobIdentifier $fileBatchJobIdentifier
 * @property RestartBatchJobIdentifier $restartBatchJobIdentifier
 * @property S3BatchJobIdentifier $s3BatchJobIdentifier
 * @property ScriptBatchJobIdentifier $scriptBatchJobIdentifier
 */
class BatchJobIdentifier extends Shape
{
    /**
     * @param array{
     *     fileBatchJobIdentifier?: FileBatchJobIdentifier,
     *     restartBatchJobIdentifier?: RestartBatchJobIdentifier,
     *     s3BatchJobIdentifier?: S3BatchJobIdentifier,
     *     scriptBatchJobIdentifier?: ScriptBatchJobIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
