<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property string $ClientToken
 * @property bool $DryRun
 */
class DeleteVerifiedAccessGroupRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     ClientToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
