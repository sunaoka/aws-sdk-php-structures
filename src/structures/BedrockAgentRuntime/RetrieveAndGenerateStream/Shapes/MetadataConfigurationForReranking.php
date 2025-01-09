<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELECTIVE'|'ALL' $selectionMode
 * @property RerankingMetadataSelectiveModeConfiguration $selectiveModeConfiguration
 */
class MetadataConfigurationForReranking extends Shape
{
    /**
     * @param array{
     *     selectionMode: 'SELECTIVE'|'ALL',
     *     selectiveModeConfiguration?: RerankingMetadataSelectiveModeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
