<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NaturalLanguageQueryGenerationOptionsInput|null $NaturalLanguageQueryGenerationOptions
 */
class AIMLOptionsInput extends Shape
{
    /**
     * @param array{NaturalLanguageQueryGenerationOptions?: NaturalLanguageQueryGenerationOptionsInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
