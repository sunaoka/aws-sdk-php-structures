<?php

namespace Sunaoka\Aws\Structures\ElementalInference\UpdateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $summaryGeneration
 * @property 'ENABLED'|'DISABLED'|null $extendedAnalysis
 */
class ContextualMetadataConfig extends Shape
{
    /**
     * @param array{
     *     summaryGeneration?: 'ENABLED'|'DISABLED'|null,
     *     extendedAnalysis?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
