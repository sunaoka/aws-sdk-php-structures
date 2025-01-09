<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleArn
 * @property 'ENABLED'|'DISABLED' $RuleStatus
 * @property int<1, 1000> $RuleOrder
 * @property string $RuleName
 * @property string $Description
 * @property bool $IsTerminal
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $CreatedBy
 */
class AutomationRulesMetadata extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string,
     *     RuleStatus?: 'ENABLED'|'DISABLED',
     *     RuleOrder?: int<1, 1000>,
     *     RuleName?: string,
     *     Description?: string,
     *     IsTerminal?: bool,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
