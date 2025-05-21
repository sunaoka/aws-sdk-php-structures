<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetManagedThing;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Owner
 * @property string|null $CredentialLockerId
 * @property string|null $AdvertisedProductId
 * @property 'CONTROLLER'|'DEVICE'|null $Role
 * @property 'UNASSOCIATED'|'PRE_ASSOCIATED'|'DISCOVERED'|'ACTIVATED'|'DELETION_FAILED'|'DELETE_IN_PROGRESS'|'ISOLATED'|'DELETED'|null $ProvisioningStatus
 * @property string|null $Name
 * @property string|null $Model
 * @property string|null $Brand
 * @property string|null $SerialNumber
 * @property string|null $UniversalProductCode
 * @property string|null $InternationalArticleNumber
 * @property string|null $ConnectorPolicyId
 * @property string|null $ConnectorDeviceId
 * @property string|null $DeviceSpecificKey
 * @property string|null $MacAddress
 * @property string|null $ParentControllerId
 * @property string|null $Classification
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property \Aws\Api\DateTimeResult|null $ActivatedAt
 * @property 'STANDARD'|'NETWORK_WIDE_EXCLUSION'|null $HubNetworkMode
 * @property array<string, string>|null $MetaData
 * @property array<string, string>|null $Tags
 */
class GetManagedThingResponse extends Response
{
}
