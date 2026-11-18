<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteDatasetGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $generationId
 */
class DeleteDatasetGenerationRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     generationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
