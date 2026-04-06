<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION'|null $Edition
 * @property string|null $RoleArn
 * @property Shapes\ServerSideEncryptionConfiguration|null $ServerSideEncryptionConfiguration
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'SYSTEM_UPDATING'|null $Status
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<Shapes\DocumentMetadataConfiguration>|null $DocumentMetadataConfigurations
 * @property Shapes\IndexStatistics|null $IndexStatistics
 * @property string|null $ErrorMessage
 * @property Shapes\CapacityUnitsConfiguration|null $CapacityUnits
 * @property list<Shapes\UserTokenConfiguration>|null $UserTokenConfigurations
 * @property 'ATTRIBUTE_FILTER'|'USER_TOKEN'|null $UserContextPolicy
 * @property Shapes\UserGroupResolutionConfiguration|null $UserGroupResolutionConfiguration
 */
class DescribeIndexResponse extends Response
{
}
