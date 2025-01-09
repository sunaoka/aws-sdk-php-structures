<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListDelegatedAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLED'|'DISABLE_IN_PROGRESS' $status
 */
class DelegatedAdminAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     status?: 'ENABLED'|'DISABLE_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
