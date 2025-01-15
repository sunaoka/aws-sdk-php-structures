<?php

namespace Sunaoka\Aws\Structures\IoTEvents\DescribeDetectorModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hashKeyType
 * @property string $hashKeyField
 * @property string $hashKeyValue
 * @property string|null $rangeKeyType
 * @property string|null $rangeKeyField
 * @property string|null $rangeKeyValue
 * @property string|null $operation
 * @property string|null $payloadField
 * @property string $tableName
 * @property Payload|null $payload
 */
class DynamoDBAction extends Shape
{
    /**
     * @param array{
     *     hashKeyType?: string|null,
     *     hashKeyField: string,
     *     hashKeyValue: string,
     *     rangeKeyType?: string|null,
     *     rangeKeyField?: string|null,
     *     rangeKeyValue?: string|null,
     *     operation?: string|null,
     *     payloadField?: string|null,
     *     tableName: string,
     *     payload?: Payload|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
