<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityStoreId
 * @property string $userId
 */
class SSOIdentity extends Shape
{
    /**
     * @param array{
     *     identityStoreId: string,
     *     userId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
