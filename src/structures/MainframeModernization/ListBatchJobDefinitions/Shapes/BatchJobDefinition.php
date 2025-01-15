<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FileBatchJobDefinition|null $fileBatchJobDefinition
 * @property ScriptBatchJobDefinition|null $scriptBatchJobDefinition
 */
class BatchJobDefinition extends Shape
{
    /**
     * @param array{
     *     fileBatchJobDefinition?: FileBatchJobDefinition|null,
     *     scriptBatchJobDefinition?: ScriptBatchJobDefinition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
