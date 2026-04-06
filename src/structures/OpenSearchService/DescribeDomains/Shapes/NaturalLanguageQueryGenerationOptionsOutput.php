<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $DesiredState
 * @property 'NOT_ENABLED'|'ENABLE_COMPLETE'|'ENABLE_IN_PROGRESS'|'ENABLE_FAILED'|'DISABLE_COMPLETE'|'DISABLE_IN_PROGRESS'|'DISABLE_FAILED'|null $CurrentState
 */
class NaturalLanguageQueryGenerationOptionsOutput extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED'|null,
     *     CurrentState?: 'NOT_ENABLED'|'ENABLE_COMPLETE'|'ENABLE_IN_PROGRESS'|'ENABLE_FAILED'|'DISABLE_COMPLETE'|'DISABLE_IN_PROGRESS'|'DISABLE_FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
