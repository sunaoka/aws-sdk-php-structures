<?php

namespace Sunaoka\Aws\Structures\Iot\GetTopicRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tableName
 * @property string $roleArn
 * @property string $operation
 * @property string $hashKeyField
 * @property string $hashKeyValue
 * @property 'STRING'|'NUMBER' $hashKeyType
 * @property string $rangeKeyField
 * @property string $rangeKeyValue
 * @property 'STRING'|'NUMBER' $rangeKeyType
 * @property string $payloadField
 */
class DynamoDBAction extends Shape
{
    /**
     * @param array{
     *     tableName: string,
     *     roleArn: string,
     *     operation?: string,
     *     hashKeyField: string,
     *     hashKeyValue: string,
     *     hashKeyType?: 'STRING'|'NUMBER',
     *     rangeKeyField?: string,
     *     rangeKeyValue?: string,
     *     rangeKeyType?: 'STRING'|'NUMBER',
     *     payloadField?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
