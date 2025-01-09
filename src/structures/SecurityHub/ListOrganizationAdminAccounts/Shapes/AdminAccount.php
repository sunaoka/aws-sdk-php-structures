<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property 'ENABLED'|'DISABLE_IN_PROGRESS' $Status
 */
class AdminAccount extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     Status?: 'ENABLED'|'DISABLE_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
