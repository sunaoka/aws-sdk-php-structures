<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetVariables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME' $dataType
 * @property 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE' $dataSource
 * @property string $defaultValue
 * @property string $description
 * @property string $variableType
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property string $arn
 */
class Variable extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     dataType?: 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME',
     *     dataSource?: 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE',
     *     defaultValue?: string,
     *     description?: string,
     *     variableType?: string,
     *     lastUpdatedTime?: string,
     *     createdTime?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
