<?php

namespace Sunaoka\Aws\Structures\FMS\ListAdminAccountsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdminAccount
 * @property bool|null $DefaultAdmin
 * @property 'ONBOARDING'|'ONBOARDING_COMPLETE'|'OFFBOARDING'|'OFFBOARDING_COMPLETE'|null $Status
 */
class AdminAccountSummary extends Shape
{
    /**
     * @param array{
     *     AdminAccount?: string|null,
     *     DefaultAdmin?: bool|null,
     *     Status?: 'ONBOARDING'|'ONBOARDING_COMPLETE'|'OFFBOARDING'|'OFFBOARDING_COMPLETE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
