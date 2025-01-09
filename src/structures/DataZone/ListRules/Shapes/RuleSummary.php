<?php

namespace Sunaoka\Aws\Structures\DataZone\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATE_SUBSCRIPTION_REQUEST' $action
 * @property string $identifier
 * @property string $lastUpdatedBy
 * @property string $name
 * @property string $revision
 * @property 'METADATA_FORM_ENFORCEMENT' $ruleType
 * @property RuleScope $scope
 * @property RuleTarget $target
 * @property 'DOMAIN_UNIT' $targetType
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     action?: 'CREATE_SUBSCRIPTION_REQUEST',
     *     identifier?: string,
     *     lastUpdatedBy?: string,
     *     name?: string,
     *     revision?: string,
     *     ruleType?: 'METADATA_FORM_ENFORCEMENT',
     *     scope?: RuleScope,
     *     target?: RuleTarget,
     *     targetType?: 'DOMAIN_UNIT',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
