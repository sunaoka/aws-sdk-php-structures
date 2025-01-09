<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler' $Type
 * @property 'Creating'|'Updating'|'Deleting'|'Available'|'Failed'|'UpdateFailed'|'Deleted' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $ExecutionRoleArn
 * @property string $BaseUrl
 * @property Shapes\PartnerAppMaintenanceConfig $MaintenanceConfig
 * @property string $Tier
 * @property string $Version
 * @property Shapes\PartnerAppConfig $ApplicationConfig
 * @property 'IAM' $AuthType
 * @property bool $EnableIamSessionBasedIdentity
 * @property Shapes\ErrorInfo $Error
 */
class DescribePartnerAppResponse extends Response
{
}
