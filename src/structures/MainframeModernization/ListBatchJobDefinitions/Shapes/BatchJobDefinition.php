<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileBatchJobDefinition $fileBatchJobDefinition
 * @property ScriptBatchJobDefinition $scriptBatchJobDefinition
 */
class BatchJobDefinition extends Shape
{
    /**
     * @param array{
     *     fileBatchJobDefinition?: FileBatchJobDefinition,
     *     scriptBatchJobDefinition?: ScriptBatchJobDefinition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
