<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property string|null $VerifiedAccessInstanceId
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class ModifyVerifiedAccessGroupRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     VerifiedAccessInstanceId?: string|null,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
