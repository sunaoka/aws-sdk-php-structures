<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NaturalLanguageQueryGenerationOptionsOutput|null $NaturalLanguageQueryGenerationOptions
 */
class AIMLOptionsOutput extends Shape
{
    /**
     * @param array{NaturalLanguageQueryGenerationOptions?: NaturalLanguageQueryGenerationOptionsOutput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
