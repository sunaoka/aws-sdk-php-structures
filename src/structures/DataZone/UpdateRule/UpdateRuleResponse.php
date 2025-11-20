<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string|null $description
 * @property Shapes\RuleDetail $detail
 * @property string $identifier
 * @property string $lastUpdatedBy
 * @property string $name
 * @property string $revision
 * @property 'METADATA_FORM_ENFORCEMENT'|'GLOSSARY_TERM_ENFORCEMENT' $ruleType
 * @property Shapes\RuleScope $scope
 * @property Shapes\RuleTarget $target
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateRuleResponse extends Response
{
}
