<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property EC2CreateRouteAction $EC2CreateRouteAction
 * @property EC2ReplaceRouteAction $EC2ReplaceRouteAction
 * @property EC2DeleteRouteAction $EC2DeleteRouteAction
 * @property EC2CopyRouteTableAction $EC2CopyRouteTableAction
 * @property EC2ReplaceRouteTableAssociationAction $EC2ReplaceRouteTableAssociationAction
 * @property EC2AssociateRouteTableAction $EC2AssociateRouteTableAction
 * @property EC2CreateRouteTableAction $EC2CreateRouteTableAction
 * @property FMSPolicyUpdateFirewallCreationConfigAction $FMSPolicyUpdateFirewallCreationConfigAction
 * @property CreateNetworkAclAction $CreateNetworkAclAction
 * @property ReplaceNetworkAclAssociationAction $ReplaceNetworkAclAssociationAction
 * @property CreateNetworkAclEntriesAction $CreateNetworkAclEntriesAction
 * @property DeleteNetworkAclEntriesAction $DeleteNetworkAclEntriesAction
 */
class RemediationAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     EC2CreateRouteAction?: EC2CreateRouteAction,
     *     EC2ReplaceRouteAction?: EC2ReplaceRouteAction,
     *     EC2DeleteRouteAction?: EC2DeleteRouteAction,
     *     EC2CopyRouteTableAction?: EC2CopyRouteTableAction,
     *     EC2ReplaceRouteTableAssociationAction?: EC2ReplaceRouteTableAssociationAction,
     *     EC2AssociateRouteTableAction?: EC2AssociateRouteTableAction,
     *     EC2CreateRouteTableAction?: EC2CreateRouteTableAction,
     *     FMSPolicyUpdateFirewallCreationConfigAction?: FMSPolicyUpdateFirewallCreationConfigAction,
     *     CreateNetworkAclAction?: CreateNetworkAclAction,
     *     ReplaceNetworkAclAssociationAction?: ReplaceNetworkAclAssociationAction,
     *     CreateNetworkAclEntriesAction?: CreateNetworkAclEntriesAction,
     *     DeleteNetworkAclEntriesAction?: DeleteNetworkAclEntriesAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
