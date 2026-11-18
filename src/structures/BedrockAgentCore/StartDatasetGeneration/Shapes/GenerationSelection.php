<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GenerationFilters|null $filters
 * @property GenerationIdentifiers|null $identifiers
 */
class GenerationSelection extends Shape
{
    /**
     * @param array{
     *     filters?: GenerationFilters|null,
     *     identifiers?: GenerationIdentifiers|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
