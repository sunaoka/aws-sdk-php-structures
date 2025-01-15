<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListDelegatedAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'ENABLED'|'DISABLE_IN_PROGRESS'|null $status
 */
class DelegatedAdminAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     status?: 'ENABLED'|'DISABLE_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
