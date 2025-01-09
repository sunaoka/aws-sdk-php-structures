<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateVariable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME' $dataType
 * @property 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE' $dataSource
 * @property string $defaultValue
 * @property string $description
 * @property string $variableType
 * @property list<Shapes\Tag> $tags
 */
class CreateVariableRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     dataType: 'STRING'|'INTEGER'|'FLOAT'|'BOOLEAN'|'DATETIME',
     *     dataSource: 'EVENT'|'MODEL_SCORE'|'EXTERNAL_MODEL_SCORE',
     *     defaultValue: string,
     *     description?: string,
     *     variableType?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
