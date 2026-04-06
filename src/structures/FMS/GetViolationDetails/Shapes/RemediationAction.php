<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property EC2CreateRouteAction|null $EC2CreateRouteAction
 * @property EC2ReplaceRouteAction|null $EC2ReplaceRouteAction
 * @property EC2DeleteRouteAction|null $EC2DeleteRouteAction
 * @property EC2CopyRouteTableAction|null $EC2CopyRouteTableAction
 * @property EC2ReplaceRouteTableAssociationAction|null $EC2ReplaceRouteTableAssociationAction
 * @property EC2AssociateRouteTableAction|null $EC2AssociateRouteTableAction
 * @property EC2CreateRouteTableAction|null $EC2CreateRouteTableAction
 * @property FMSPolicyUpdateFirewallCreationConfigAction|null $FMSPolicyUpdateFirewallCreationConfigAction
 * @property CreateNetworkAclAction|null $CreateNetworkAclAction
 * @property ReplaceNetworkAclAssociationAction|null $ReplaceNetworkAclAssociationAction
 * @property CreateNetworkAclEntriesAction|null $CreateNetworkAclEntriesAction
 * @property DeleteNetworkAclEntriesAction|null $DeleteNetworkAclEntriesAction
 */
class RemediationAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     EC2CreateRouteAction?: EC2CreateRouteAction|null,
     *     EC2ReplaceRouteAction?: EC2ReplaceRouteAction|null,
     *     EC2DeleteRouteAction?: EC2DeleteRouteAction|null,
     *     EC2CopyRouteTableAction?: EC2CopyRouteTableAction|null,
     *     EC2ReplaceRouteTableAssociationAction?: EC2ReplaceRouteTableAssociationAction|null,
     *     EC2AssociateRouteTableAction?: EC2AssociateRouteTableAction|null,
     *     EC2CreateRouteTableAction?: EC2CreateRouteTableAction|null,
     *     FMSPolicyUpdateFirewallCreationConfigAction?: FMSPolicyUpdateFirewallCreationConfigAction|null,
     *     CreateNetworkAclAction?: CreateNetworkAclAction|null,
     *     ReplaceNetworkAclAssociationAction?: ReplaceNetworkAclAssociationAction|null,
     *     CreateNetworkAclEntriesAction?: CreateNetworkAclEntriesAction|null,
     *     DeleteNetworkAclEntriesAction?: DeleteNetworkAclEntriesAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
