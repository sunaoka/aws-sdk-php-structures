<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeIndex;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Id
 * @property 'DEVELOPER_EDITION'|'ENTERPRISE_EDITION'|'GEN_AI_ENTERPRISE_EDITION' $Edition
 * @property string $RoleArn
 * @property Shapes\ServerSideEncryptionConfiguration $ServerSideEncryptionConfiguration
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED'|'UPDATING'|'SYSTEM_UPDATING' $Status
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<Shapes\DocumentMetadataConfiguration> $DocumentMetadataConfigurations
 * @property Shapes\IndexStatistics $IndexStatistics
 * @property string $ErrorMessage
 * @property Shapes\CapacityUnitsConfiguration $CapacityUnits
 * @property list<Shapes\UserTokenConfiguration> $UserTokenConfigurations
 * @property 'ATTRIBUTE_FILTER'|'USER_TOKEN' $UserContextPolicy
 * @property Shapes\UserGroupResolutionConfiguration $UserGroupResolutionConfiguration
 */
class DescribeIndexResponse extends Response
{
}
