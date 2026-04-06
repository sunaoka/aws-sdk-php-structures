<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CHUNK_ENTITY_EXTRACTION' $method
 */
class EnrichmentStrategyConfiguration extends Shape
{
    /**
     * @param array{method: 'CHUNK_ENTITY_EXTRACTION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
