<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseName
 * @property string $TableName
 * @property string|null $CatalogId
 * @property string|null $ConnectionName
 * @property array<string, string>|null $AdditionalOptions
 */
class GlueTable extends Shape
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     TableName: string,
     *     CatalogId?: string|null,
     *     ConnectionName?: string|null,
     *     AdditionalOptions?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
