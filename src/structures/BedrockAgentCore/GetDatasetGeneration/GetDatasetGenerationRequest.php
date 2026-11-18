<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $generationId
 */
class GetDatasetGenerationRequest extends Request
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
