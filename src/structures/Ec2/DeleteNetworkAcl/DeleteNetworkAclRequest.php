<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkAcl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $NetworkAclId
 */
class DeleteNetworkAclRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     NetworkAclId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
