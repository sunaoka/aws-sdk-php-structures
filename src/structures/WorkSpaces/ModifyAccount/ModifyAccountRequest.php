<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED'|null $DedicatedTenancySupport
 * @property string|null $DedicatedTenancyManagementCidrRange
 */
class ModifyAccountRequest extends Request
{
    /**
     * @param array{
     *     DedicatedTenancySupport?: 'ENABLED'|null,
     *     DedicatedTenancyManagementCidrRange?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
