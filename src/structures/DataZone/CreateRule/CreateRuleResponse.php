<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property Shapes\RuleDetail $detail
 * @property string $identifier
 * @property string $name
 * @property 'METADATA_FORM_ENFORCEMENT' $ruleType
 * @property Shapes\RuleScope $scope
 * @property Shapes\RuleTarget $target
 * @property 'DOMAIN_UNIT'|null $targetType
 */
class CreateRuleResponse extends Response
{
}
