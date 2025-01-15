<?php

namespace Sunaoka\Aws\Structures\mgn\ListManagedAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 */
class ManagedAccount extends Shape
{
    /**
     * @param array{accountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
