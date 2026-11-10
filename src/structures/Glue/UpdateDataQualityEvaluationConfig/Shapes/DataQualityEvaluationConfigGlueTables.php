<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDataQualityEvaluationConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CatalogId
 * @property string|null $DatabaseName
 * @property string|null $TableNamePattern
 * @property string|null $PreProcessingQuery
 * @property string|null $ConnectionName
 * @property array<string, string>|null $AdditionalOptions
 */
class DataQualityEvaluationConfigGlueTables extends Shape
{
    /**
     * @param array{
     *     CatalogId: string,
     *     DatabaseName?: string|null,
     *     TableNamePattern?: string|null,
     *     PreProcessingQuery?: string|null,
     *     ConnectionName?: string|null,
     *     AdditionalOptions?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
