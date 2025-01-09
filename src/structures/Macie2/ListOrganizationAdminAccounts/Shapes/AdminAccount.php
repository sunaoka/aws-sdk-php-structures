<?php

namespace Sunaoka\Aws\Structures\Macie2\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property 'ENABLED'|'DISABLING_IN_PROGRESS' $status
 */
class AdminAccount extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     status?: 'ENABLED'|'DISABLING_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
