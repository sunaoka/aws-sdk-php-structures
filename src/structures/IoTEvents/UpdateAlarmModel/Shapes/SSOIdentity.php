<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $identityStoreId
 * @property string|null $userId
 */
class SSOIdentity extends Shape
{
    /**
     * @param array{
     *     identityStoreId: string,
     *     userId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
