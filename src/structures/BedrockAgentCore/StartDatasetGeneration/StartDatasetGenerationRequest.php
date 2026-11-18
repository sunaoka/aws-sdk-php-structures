<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 * @property string $name
 * @property string|null $description
 * @property 'FIXED'|'DYNAMIC'|null $scenarioType
 * @property Shapes\GenerationSource $source
 * @property string|null $clientToken
 */
class StartDatasetGenerationRequest extends Request
{
    /**
     * @param array{
     *     datasetId: string,
     *     name: string,
     *     description?: string|null,
     *     scenarioType?: 'FIXED'|'DYNAMIC'|null,
     *     source: Shapes\GenerationSource,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
