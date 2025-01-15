<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateVariable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME' $dataType
 * @property 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE' $dataSource
 * @property string $defaultValue
 * @property string|null $description
 * @property string|null $variableType
 * @property list<Shapes\Tag>|null $tags
 */
class CreateVariableRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     dataType: 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME',
     *     dataSource: 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE',
     *     defaultValue: string,
     *     description?: string|null,
     *     variableType?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
