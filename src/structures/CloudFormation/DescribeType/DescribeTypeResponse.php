<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property 'RESOURCE'|'MODULE'|'HOOK'|null $Type
 * @property string|null $TypeName
 * @property string|null $DefaultVersionId
 * @property bool|null $IsDefaultVersion
 * @property 'PASSED'|'FAILED'|'IN_PROGRESS'|'NOT_TESTED'|null $TypeTestsStatus
 * @property string|null $TypeTestsStatusDescription
 * @property string|null $Description
 * @property string|null $Schema
 * @property 'NON_PROVISIONABLE'|'IMMUTABLE'|'FULLY_MUTABLE'|null $ProvisioningType
 * @property 'LIVE'|'DEPRECATED'|null $DeprecatedStatus
 * @property Shapes\LoggingConfig|null $LoggingConfig
 * @property list<Shapes\RequiredActivatedType>|null $RequiredActivatedTypes
 * @property string|null $ExecutionRoleArn
 * @property 'PUBLIC'|'PRIVATE'|null $Visibility
 * @property string|null $SourceUrl
 * @property string|null $DocumentationUrl
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property \Aws\Api\DateTimeResult|null $TimeCreated
 * @property string|null $ConfigurationSchema
 * @property string|null $PublisherId
 * @property string|null $OriginalTypeName
 * @property string|null $OriginalTypeArn
 * @property string|null $PublicVersionNumber
 * @property string|null $LatestPublicVersion
 * @property bool|null $IsActivated
 * @property bool|null $AutoUpdate
 */
class DescribeTypeResponse extends Response
{
}
