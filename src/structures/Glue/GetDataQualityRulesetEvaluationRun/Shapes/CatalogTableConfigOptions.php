<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseName
 * @property string|null $TableName
 * @property string|null $S3Location
 * @property string|null $CatalogId
 */
class CatalogTableConfigOptions extends Shape
{
    /**
     * @param array{
     *     DatabaseName?: string|null,
     *     TableName?: string|null,
     *     S3Location?: string|null,
     *     CatalogId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
