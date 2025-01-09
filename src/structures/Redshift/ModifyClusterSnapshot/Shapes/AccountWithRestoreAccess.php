<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $AccountAlias
 */
class AccountWithRestoreAccess extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     AccountAlias?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
