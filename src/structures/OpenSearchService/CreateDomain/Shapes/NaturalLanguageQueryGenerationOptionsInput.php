<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $DesiredState
 */
class NaturalLanguageQueryGenerationOptionsInput extends Shape
{
    /**
     * @param array{DesiredState?: 'ENABLED'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
