<?php

namespace Sunaoka\Aws\Structures\DataZone\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 * @property string|null $revision
 * @property 'METADATA_FORM_ENFORCEMENT'|'GLOSSARY_TERM_ENFORCEMENT'|null $ruleType
 * @property string|null $name
 * @property 'DOMAIN_UNIT'|null $targetType
 * @property RuleTarget|null $target
 * @property 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST'|null $action
 * @property RuleScope|null $scope
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $lastUpdatedBy
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     identifier?: string|null,
     *     revision?: string|null,
     *     ruleType?: 'METADATA_FORM_ENFORCEMENT'|'GLOSSARY_TERM_ENFORCEMENT'|null,
     *     name?: string|null,
     *     targetType?: 'DOMAIN_UNIT'|null,
     *     target?: RuleTarget|null,
     *     action?: 'CREATE_LISTING_CHANGE_SET'|'CREATE_SUBSCRIPTION_REQUEST'|null,
     *     scope?: RuleScope|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
