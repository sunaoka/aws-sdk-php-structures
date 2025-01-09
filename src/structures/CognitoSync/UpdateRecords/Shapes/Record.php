<?php

namespace Sunaoka\Aws\Structures\CognitoSync\UpdateRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property int $SyncCount
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $DeviceLastModifiedDate
 */
class Record extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     SyncCount?: int,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: string,
     *     DeviceLastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
