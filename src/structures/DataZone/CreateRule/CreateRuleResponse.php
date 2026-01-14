<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $identifier
 * @property string $name
 * @property 'METADATA_FORM_ENFORCEMENT'|'GLOSSARY_TERM_ENFORCEMENT' $ruleType
 * @property Shapes\RuleTarget $target
 * @property 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property Shapes\RuleScope $scope
 * @property Shapes\RuleDetail $detail
 * @property 'DOMAIN_UNIT'|null $targetType
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 */
class CreateRuleResponse extends Response
{
}
