<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NaturalLanguageQueryGenerationOptionsOutput|null $NaturalLanguageQueryGenerationOptions
 * @property S3VectorsEngine|null $S3VectorsEngine
 */
class AIMLOptionsOutput extends Shape
{
    /**
     * @param array{
     *     NaturalLanguageQueryGenerationOptions?: NaturalLanguageQueryGenerationOptionsOutput|null,
     *     S3VectorsEngine?: S3VectorsEngine|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
