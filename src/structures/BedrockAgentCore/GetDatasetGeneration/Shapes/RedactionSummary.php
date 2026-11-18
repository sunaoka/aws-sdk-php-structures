<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetDatasetGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $scenariosScanned
 * @property array<string, int>|null $findingCounts
 */
class RedactionSummary extends Shape
{
    /**
     * @param array{
     *     scenariosScanned?: int|null,
     *     findingCounts?: array<string, int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
