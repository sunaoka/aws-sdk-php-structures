<?php

namespace Sunaoka\Aws\Structures\FMS\ListAdminAccountsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdminAccount
 * @property bool $DefaultAdmin
 * @property 'ONBOARDING'|'ONBOARDING_COMPLETE'|'OFFBOARDING'|'OFFBOARDING_COMPLETE' $Status
 */
class AdminAccountSummary extends Shape
{
    /**
     * @param array{
     *     AdminAccount?: string,
     *     DefaultAdmin?: bool,
     *     Status?: 'ONBOARDING'|'ONBOARDING_COMPLETE'|'OFFBOARDING'|'OFFBOARDING_COMPLETE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
