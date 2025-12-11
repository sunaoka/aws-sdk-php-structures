<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableCapacityManager;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $OrganizationsAccess
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class EnableCapacityManagerRequest extends Request
{
    /**
     * @param array{
     *     OrganizationsAccess?: bool|null,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
