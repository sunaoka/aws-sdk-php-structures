<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetVariables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME'|null $dataType
 * @property 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE'|null $dataSource
 * @property string|null $defaultValue
 * @property string|null $description
 * @property string|null $variableType
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property string|null $arn
 */
class Variable extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     dataType?: 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME'|null,
     *     dataSource?: 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE'|null,
     *     defaultValue?: string|null,
     *     description?: string|null,
     *     variableType?: string|null,
     *     lastUpdatedTime?: string|null,
     *     createdTime?: string|null,
     *     arn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
