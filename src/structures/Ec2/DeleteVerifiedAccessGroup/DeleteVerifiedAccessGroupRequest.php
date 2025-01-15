<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteVerifiedAccessGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessGroupId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 */
class DeleteVerifiedAccessGroupRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessGroupId: string,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
