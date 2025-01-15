<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListOrganizationAdminAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property 'ENABLED'|'DISABLE_IN_PROGRESS'|null $Status
 */
class AdminAccount extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     Status?: 'ENABLED'|'DISABLE_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
