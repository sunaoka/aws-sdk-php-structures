<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $DesiredState
 * @property 'NOT_ENABLED'|'ENABLE_COMPLETE'|'ENABLE_IN_PROGRESS'|'ENABLE_FAILED'|'DISABLE_COMPLETE'|'DISABLE_IN_PROGRESS'|'DISABLE_FAILED' $CurrentState
 */
class NaturalLanguageQueryGenerationOptionsOutput extends Shape
{
    /**
     * @param array{
     *     DesiredState?: 'ENABLED'|'DISABLED',
     *     CurrentState?: 'NOT_ENABLED'|'ENABLE_COMPLETE'|'ENABLE_IN_PROGRESS'|'ENABLE_FAILED'|'DISABLE_COMPLETE'|'DISABLE_IN_PROGRESS'|'DISABLE_FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
