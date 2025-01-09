<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NaturalLanguageQueryGenerationOptionsOutput $NaturalLanguageQueryGenerationOptions
 */
class AIMLOptionsOutput extends Shape
{
    /**
     * @param array{NaturalLanguageQueryGenerationOptions?: NaturalLanguageQueryGenerationOptionsOutput} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
