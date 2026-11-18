<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GenerationFilters|null $filters
 * @property GenerationIdentifierCounts|null $identifiers
 */
class GenerationSelectionRecord extends Shape
{
    /**
     * @param array{
     *     filters?: GenerationFilters|null,
     *     identifiers?: GenerationIdentifierCounts|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
