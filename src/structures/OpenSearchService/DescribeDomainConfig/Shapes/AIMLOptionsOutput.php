<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NaturalLanguageQueryGenerationOptionsOutput|null $NaturalLanguageQueryGenerationOptions
 * @property S3VectorsEngine|null $S3VectorsEngine
 * @property ServerlessVectorAcceleration|null $ServerlessVectorAcceleration
 */
class AIMLOptionsOutput extends Shape
{
    /**
     * @param array{
     *     NaturalLanguageQueryGenerationOptions?: NaturalLanguageQueryGenerationOptionsOutput|null,
     *     S3VectorsEngine?: S3VectorsEngine|null,
     *     ServerlessVectorAcceleration?: ServerlessVectorAcceleration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
