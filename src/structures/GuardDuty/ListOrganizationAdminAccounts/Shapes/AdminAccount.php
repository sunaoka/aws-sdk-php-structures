<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdminAccountId
 * @property 'ENABLED'|'DISABLE_IN_PROGRESS' $AdminStatus
 */
class AdminAccount extends Shape
{
    /**
     * @param array{
     *     AdminAccountId?: string,
     *     AdminStatus?: 'ENABLED'|'DISABLE_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
