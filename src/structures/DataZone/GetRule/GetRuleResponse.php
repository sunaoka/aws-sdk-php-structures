<?php

namespace Sunaoka\Aws\Structures\DataZone\GetRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $description
 * @property Shapes\RuleDetail $detail
 * @property string $identifier
 * @property string $lastUpdatedBy
 * @property string $name
 * @property string $revision
 * @property 'METADATA_FORM_ENFORCEMENT' $ruleType
 * @property Shapes\RuleScope $scope
 * @property Shapes\RuleTarget $target
 * @property 'DOMAIN_UNIT' $targetType
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetRuleResponse extends Response
{
}
