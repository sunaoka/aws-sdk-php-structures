<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeType;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property 'RESOURCE'|'MODULE'|'HOOK' $Type
 * @property string $TypeName
 * @property string $DefaultVersionId
 * @property bool $IsDefaultVersion
 * @property 'PASSED'|'FAILED'|'IN_PROGRESS'|'NOT_TESTED' $TypeTestsStatus
 * @property string $TypeTestsStatusDescription
 * @property string $Description
 * @property string $Schema
 * @property 'NON_PROVISIONABLE'|'IMMUTABLE'|'FULLY_MUTABLE' $ProvisioningType
 * @property 'LIVE'|'DEPRECATED' $DeprecatedStatus
 * @property Shapes\LoggingConfig $LoggingConfig
 * @property list<Shapes\RequiredActivatedType> $RequiredActivatedTypes
 * @property string $ExecutionRoleArn
 * @property 'PUBLIC'|'PRIVATE' $Visibility
 * @property string $SourceUrl
 * @property string $DocumentationUrl
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property \Aws\Api\DateTimeResult $TimeCreated
 * @property string $ConfigurationSchema
 * @property string $PublisherId
 * @property string $OriginalTypeName
 * @property string $OriginalTypeArn
 * @property string $PublicVersionNumber
 * @property string $LatestPublicVersion
 * @property bool $IsActivated
 * @property bool $AutoUpdate
 */
class DescribeTypeResponse extends Response
{
}
