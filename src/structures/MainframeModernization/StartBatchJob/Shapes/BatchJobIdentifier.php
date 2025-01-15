<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\StartBatchJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileBatchJobIdentifier|null $fileBatchJobIdentifier
 * @property RestartBatchJobIdentifier|null $restartBatchJobIdentifier
 * @property S3BatchJobIdentifier|null $s3BatchJobIdentifier
 * @property ScriptBatchJobIdentifier|null $scriptBatchJobIdentifier
 */
class BatchJobIdentifier extends Shape
{
    /**
     * @param array{
     *     fileBatchJobIdentifier?: FileBatchJobIdentifier|null,
     *     restartBatchJobIdentifier?: RestartBatchJobIdentifier|null,
     *     s3BatchJobIdentifier?: S3BatchJobIdentifier|null,
     *     scriptBatchJobIdentifier?: ScriptBatchJobIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
