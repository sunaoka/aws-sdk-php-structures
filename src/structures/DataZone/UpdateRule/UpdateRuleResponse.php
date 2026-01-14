<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $identifier
 * @property string $revision
 * @property string $name
 * @property 'METADATA_FORM_ENFORCEMENT'|'GLOSSARY_TERM_ENFORCEMENT' $ruleType
 * @property Shapes\RuleTarget $target
 * @property 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property Shapes\RuleScope $scope
 * @property Shapes\RuleDetail $detail
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $createdBy
 * @property string $lastUpdatedBy
 */
class UpdateRuleResponse extends Response
{
}
