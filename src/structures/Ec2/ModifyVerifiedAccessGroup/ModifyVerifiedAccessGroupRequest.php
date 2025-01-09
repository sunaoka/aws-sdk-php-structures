<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property string $VerifiedAccessInstanceId
 * @property string $Description
 * @property string $ClientToken
 * @property bool $DryRun
 */
class ModifyVerifiedAccessGroupRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     VerifiedAccessInstanceId?: string,
     *     Description?: string,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
