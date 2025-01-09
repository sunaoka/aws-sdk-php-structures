<?php

namespace Sunaoka\Aws\Structures\CognitoSync\UpdateRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'replace'|'remove' $Op
 * @property string $Key
 * @property string $Value
 * @property int $SyncCount
 * @property \Aws\Api\DateTimeResult $DeviceLastModifiedDate
 */
class RecordPatch extends Shape
{
    /**
     * @param array{
     *     Op: 'replace'|'remove',
     *     Key: string,
     *     Value?: string,
     *     SyncCount: int,
     *     DeviceLastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
