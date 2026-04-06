<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OwnerFilter
 * @property string|null $CredentialLockerFilter
 * @property 'CONTROLLER'|'DEVICE'|null $RoleFilter
 * @property string|null $ParentControllerIdentifierFilter
 * @property string|null $ConnectorPolicyIdFilter
 * @property string|null $ConnectorDestinationIdFilter
 * @property string|null $ConnectorDeviceIdFilter
 * @property string|null $SerialNumberFilter
 * @property 'UNASSOCIATED'|'PRE_ASSOCIATED'|'DISCOVERED'|'ACTIVATED'|'DELETION_FAILED'|'DELETE_IN_PROGRESS'|'ISOLATED'|'DELETED'|null $ProvisioningStatusFilter
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class ListManagedThingsRequest extends Request
{
    /**
     * @param array{
     *     OwnerFilter?: string|null,
     *     CredentialLockerFilter?: string|null,
     *     RoleFilter?: 'CONTROLLER'|'DEVICE'|null,
     *     ParentControllerIdentifierFilter?: string|null,
     *     ConnectorPolicyIdFilter?: string|null,
     *     ConnectorDestinationIdFilter?: string|null,
     *     ConnectorDeviceIdFilter?: string|null,
     *     SerialNumberFilter?: string|null,
     *     ProvisioningStatusFilter?: 'UNASSOCIATED'|'PRE_ASSOCIATED'|'DISCOVERED'|'ACTIVATED'|'DELETION_FAILED'|'DELETE_IN_PROGRESS'|'ISOLATED'|'DELETED'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
