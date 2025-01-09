<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'DISABLING'|'ENABLED'|'DISABLED' $TimeToLiveStatus
 * @property string $AttributeName
 */
class TimeToLiveDescription extends Shape
{
    /**
     * @param array{
     *     TimeToLiveStatus?: 'ENABLING'|'DISABLING'|'ENABLED'|'DISABLED',
     *     AttributeName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
