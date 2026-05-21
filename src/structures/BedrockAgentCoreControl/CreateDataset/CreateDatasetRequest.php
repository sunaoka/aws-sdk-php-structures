<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $datasetName
 * @property string|null $description
 * @property Shapes\DataSourceType $source
 * @property 'AGENTCORE_EVALUATION_PREDEFINED_V1'|'AGENTCORE_EVALUATION_SIMULATED_V1' $schemaType
 * @property string|null $kmsKeyArn
 * @property array<string, string>|null $tags
 */
class CreateDatasetRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     datasetName: string,
     *     description?: string|null,
     *     source: Shapes\DataSourceType,
     *     schemaType: 'AGENTCORE_EVALUATION_PREDEFINED_V1'|'AGENTCORE_EVALUATION_SIMULATED_V1',
     *     kmsKeyArn?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
