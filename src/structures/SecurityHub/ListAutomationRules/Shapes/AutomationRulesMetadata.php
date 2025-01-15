<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleArn
 * @property 'ENABLED'|'DISABLED'|null $RuleStatus
 * @property int<1, 1000>|null $RuleOrder
 * @property string|null $RuleName
 * @property string|null $Description
 * @property bool|null $IsTerminal
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $CreatedBy
 */
class AutomationRulesMetadata extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string|null,
     *     RuleStatus?: 'ENABLED'|'DISABLED'|null,
     *     RuleOrder?: int<1, 1000>|null,
     *     RuleName?: string|null,
     *     Description?: string|null,
     *     IsTerminal?: bool|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
