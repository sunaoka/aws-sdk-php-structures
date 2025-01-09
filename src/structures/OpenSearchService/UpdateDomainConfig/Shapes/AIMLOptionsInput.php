<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\UpdateDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NaturalLanguageQueryGenerationOptionsInput $NaturalLanguageQueryGenerationOptions
 */
class AIMLOptionsInput extends Shape
{
    /**
     * @param array{NaturalLanguageQueryGenerationOptions?: NaturalLanguageQueryGenerationOptionsInput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
