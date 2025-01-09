<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifyAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ENABLED' $DedicatedTenancySupport
 * @property string $DedicatedTenancyManagementCidrRange
 */
class ModifyAccountRequest extends Request
{
    /**
     * @param array{
     *     DedicatedTenancySupport?: 'ENABLED',
     *     DedicatedTenancyManagementCidrRange?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
