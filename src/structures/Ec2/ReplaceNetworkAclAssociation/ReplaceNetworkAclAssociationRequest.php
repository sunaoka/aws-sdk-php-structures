<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceNetworkAclAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property bool|null $DryRun
 * @property string $NetworkAclId
 */
class ReplaceNetworkAclAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     DryRun?: bool|null,
     *     NetworkAclId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
