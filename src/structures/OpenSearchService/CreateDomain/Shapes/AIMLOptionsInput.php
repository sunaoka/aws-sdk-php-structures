<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\CreateDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NaturalLanguageQueryGenerationOptionsInput|null $NaturalLanguageQueryGenerationOptions
 * @property S3VectorsEngine|null $S3VectorsEngine
 * @property ServerlessVectorAcceleration|null $ServerlessVectorAcceleration
 */
class AIMLOptionsInput extends Shape
{
    /**
     * @param array{
     *     NaturalLanguageQueryGenerationOptions?: NaturalLanguageQueryGenerationOptionsInput|null,
     *     S3VectorsEngine?: S3VectorsEngine|null,
     *     ServerlessVectorAcceleration?: ServerlessVectorAcceleration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
