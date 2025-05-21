<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SELECTIVE'|'ALL' $selectionMode
 * @property RerankingMetadataSelectiveModeConfiguration|null $selectiveModeConfiguration
 */
class MetadataConfigurationForReranking extends Shape
{
    /**
     * @param array{
     *     selectionMode: 'SELECTIVE'|'ALL',
     *     selectiveModeConfiguration?: RerankingMetadataSelectiveModeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
