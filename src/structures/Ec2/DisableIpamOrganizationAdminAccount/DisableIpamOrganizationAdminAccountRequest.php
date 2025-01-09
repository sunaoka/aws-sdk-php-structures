<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableIpamOrganizationAdminAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $DelegatedAdminAccountId
 */
class DisableIpamOrganizationAdminAccountRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     DelegatedAdminAccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
