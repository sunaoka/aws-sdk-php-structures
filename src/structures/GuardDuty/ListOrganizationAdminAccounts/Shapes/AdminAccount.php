<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdminAccountId
 * @property 'ENABLED'|'DISABLE_IN_PROGRESS'|null $AdminStatus
 */
class AdminAccount extends Shape
{
    /**
     * @param array{
     *     AdminAccountId?: string|null,
     *     AdminStatus?: 'ENABLED'|'DISABLE_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
