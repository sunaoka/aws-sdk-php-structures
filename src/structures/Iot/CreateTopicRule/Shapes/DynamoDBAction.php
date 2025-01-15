<?php

namespace Sunaoka\Aws\Structures\Iot\CreateTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $roleArn
 * @property string|null $operation
 * @property string $hashKeyField
 * @property string $hashKeyValue
 * @property 'STRING'|'NUMBER'|null $hashKeyType
 * @property string|null $rangeKeyField
 * @property string|null $rangeKeyValue
 * @property 'STRING'|'NUMBER'|null $rangeKeyType
 * @property string|null $payloadField
 */
class DynamoDBAction extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     roleArn: string,
     *     operation?: string|null,
     *     hashKeyField: string,
     *     hashKeyValue: string,
     *     hashKeyType?: 'STRING'|'NUMBER'|null,
     *     rangeKeyField?: string|null,
     *     rangeKeyValue?: string|null,
     *     rangeKeyType?: 'STRING'|'NUMBER'|null,
     *     payloadField?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
