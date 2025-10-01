<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCaseRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseRuleId
 * @property string $name
 * @property string $caseRuleArn
 * @property 'Required' $ruleType
 * @property string|null $description
 */
class CaseRuleSummary extends Shape
{
    /**
     * @param array{
     *     caseRuleId: string,
     *     name: string,
     *     caseRuleArn: string,
     *     ruleType: 'Required',
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
