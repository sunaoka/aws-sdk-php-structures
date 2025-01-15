<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $NetworkAclId
 */
class DeleteNetworkAclRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NetworkAclId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
