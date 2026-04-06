<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribePartnerApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'lakera-guard'|'comet'|'deepchecks-llm-evaluation'|'fiddler'|null $Type
 * @property 'Creating'|'Updating'|'Deleting'|'Available'|'Failed'|'UpdateFailed'|'Deleted'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $ExecutionRoleArn
 * @property string|null $BaseUrl
 * @property Shapes\PartnerAppMaintenanceConfig|null $MaintenanceConfig
 * @property string|null $Tier
 * @property string|null $Version
 * @property Shapes\PartnerAppConfig|null $ApplicationConfig
 * @property 'IAM'|null $AuthType
 * @property bool|null $EnableIamSessionBasedIdentity
 * @property Shapes\ErrorInfo|null $Error
 */
class DescribePartnerAppResponse extends Response
{
}
