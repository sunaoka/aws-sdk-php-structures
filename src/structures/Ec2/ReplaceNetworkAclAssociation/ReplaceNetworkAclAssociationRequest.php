<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceNetworkAclAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $AssociationId
 * @property string $NetworkAclId
 */
class ReplaceNetworkAclAssociationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     AssociationId: string,
     *     NetworkAclId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
