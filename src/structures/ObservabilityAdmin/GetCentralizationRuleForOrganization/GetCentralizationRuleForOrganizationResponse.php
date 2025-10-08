<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetCentralizationRuleForOrganization;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RuleName
 * @property string|null $RuleArn
 * @property string|null $CreatorAccountId
 * @property int|null $CreatedTimeStamp
 * @property string|null $CreatedRegion
 * @property int|null $LastUpdateTimeStamp
 * @property 'Healthy'|'Unhealthy'|'Provisioning'|null $RuleHealth
 * @property 'TRUSTED_ACCESS_NOT_ENABLED'|'DESTINATION_ACCOUNT_NOT_IN_ORGANIZATION'|'INTERNAL_SERVER_ERROR'|null $FailureReason
 * @property Shapes\CentralizationRule|null $CentralizationRule
 */
class GetCentralizationRuleForOrganizationResponse extends Response
{
}
