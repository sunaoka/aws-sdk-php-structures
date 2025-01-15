<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $AccountAlias
 */
class AccountWithRestoreAccess extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     AccountAlias?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
