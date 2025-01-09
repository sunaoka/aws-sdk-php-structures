<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hashKeyType
 * @property string $hashKeyField
 * @property string $hashKeyValue
 * @property string $rangeKeyType
 * @property string $rangeKeyField
 * @property string $rangeKeyValue
 * @property string $operation
 * @property string $payloadField
 * @property string $tableName
 * @property Payload $payload
 */
class DynamoDBAction extends Shape
{
    /**
     * @param array{
     *     hashKeyType?: string,
     *     hashKeyField: string,
     *     hashKeyValue: string,
     *     rangeKeyType?: string,
     *     rangeKeyField?: string,
     *     rangeKeyValue?: string,
     *     operation?: string,
     *     payloadField?: string,
     *     tableName: string,
     *     payload?: Payload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
