<?php

namespace Sunaoka\Aws\Structures\DataZone\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_SUBSCRIPTION_REQUEST'|null $action
 * @property string|null $identifier
 * @property string|null $lastUpdatedBy
 * @property string|null $name
 * @property string|null $revision
 * @property 'METADATA_FORM_ENFORCEMENT'|null $ruleType
 * @property RuleScope|null $scope
 * @property RuleTarget|null $target
 * @property 'DOMAIN_UNIT'|null $targetType
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     action?: 'CREATE_SUBSCRIPTION_REQUEST'|null,
     *     identifier?: string|null,
     *     lastUpdatedBy?: string|null,
     *     name?: string|null,
     *     revision?: string|null,
     *     ruleType?: 'METADATA_FORM_ENFORCEMENT'|null,
     *     scope?: RuleScope|null,
     *     target?: RuleTarget|null,
     *     targetType?: 'DOMAIN_UNIT'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
