<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetAutomationRuleV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $RuleArn
 * @property string|null $RuleId
 * @property float|null $RuleOrder
 * @property string|null $RuleName
 * @property 'ENABLED'|'DISABLED'|null $RuleStatus
 * @property string|null $Description
 * @property Shapes\Criteria|null $Criteria
 * @property list<Shapes\AutomationRulesActionV2>|null $Actions
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 */
class GetAutomationRuleV2Response extends Response
{
}
