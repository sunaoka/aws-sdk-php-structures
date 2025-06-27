<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListManagedThings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $AdvertisedProductId
 * @property string|null $Brand
 * @property string|null $Classification
 * @property string|null $ConnectorDeviceId
 * @property string|null $ConnectorPolicyId
 * @property string|null $ConnectorDestinationId
 * @property string|null $Model
 * @property string|null $Name
 * @property string|null $Owner
 * @property string|null $CredentialLockerId
 * @property string|null $ParentControllerId
 * @property 'UNASSOCIATED'|'PRE_ASSOCIATED'|'DISCOVERED'|'ACTIVATED'|'DELETION_FAILED'|'DELETE_IN_PROGRESS'|'ISOLATED'|'DELETED'|null $ProvisioningStatus
 * @property 'CONTROLLER'|'DEVICE'|null $Role
 * @property string|null $SerialNumber
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $ActivatedAt
 */
class ManagedThingSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     AdvertisedProductId?: string|null,
     *     Brand?: string|null,
     *     Classification?: string|null,
     *     ConnectorDeviceId?: string|null,
     *     ConnectorPolicyId?: string|null,
     *     ConnectorDestinationId?: string|null,
     *     Model?: string|null,
     *     Name?: string|null,
     *     Owner?: string|null,
     *     CredentialLockerId?: string|null,
     *     ParentControllerId?: string|null,
     *     ProvisioningStatus?: 'UNASSOCIATED'|'PRE_ASSOCIATED'|'DISCOVERED'|'ACTIVATED'|'DELETION_FAILED'|'DELETE_IN_PROGRESS'|'ISOLATED'|'DELETED'|null,
     *     Role?: 'CONTROLLER'|'DEVICE'|null,
     *     SerialNumber?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     ActivatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
