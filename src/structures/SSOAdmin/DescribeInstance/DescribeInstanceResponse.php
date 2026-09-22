<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $InstanceArn
 * @property string|null $IdentityStoreId
 * @property string|null $IdentityStoreArn
 * @property string|null $OwnerAccountId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'DELETE_IN_PROGRESS'|'ACTIVE'|null $Status
 * @property string|null $StatusReason
 * @property string|null $PrimaryRegion
 * @property list<Shapes\RegionMetadata>|null $Regions
 * @property Shapes\EncryptionConfigurationDetails|null $EncryptionConfigurationDetails
 * @property bool|null $PermissionSetsEnabled
 */
class DescribeInstanceResponse extends Response
{
}
