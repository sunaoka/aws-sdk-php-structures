<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EnrichmentStrategyConfiguration $enrichmentStrategyConfiguration
 * @property string $modelArn
 */
class BedrockFoundationModelContextEnrichmentConfiguration extends Shape
{
    /**
     * @param array{
     *     enrichmentStrategyConfiguration: EnrichmentStrategyConfiguration,
     *     modelArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
