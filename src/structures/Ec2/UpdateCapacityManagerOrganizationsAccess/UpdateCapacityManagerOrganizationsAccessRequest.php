<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateCapacityManagerOrganizationsAccess;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $OrganizationsAccess
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 */
class UpdateCapacityManagerOrganizationsAccessRequest extends Request
{
    /**
     * @param array{
     *     OrganizationsAccess: bool,
     *     DryRun?: bool|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
