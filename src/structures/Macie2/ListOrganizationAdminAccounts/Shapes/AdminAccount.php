<?php

namespace Sunaoka\Aws\Structures\Macie2\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property 'ENABLED'|'DISABLING_IN_PROGRESS'|null $status
 */
class AdminAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     status?: 'ENABLED'|'DISABLING_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
