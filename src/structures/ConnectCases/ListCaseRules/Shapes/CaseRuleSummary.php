<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListCaseRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $caseRuleArn
 * @property string $caseRuleId
 * @property string|null $description
 * @property string $name
 * @property 'Required' $ruleType
 */
class CaseRuleSummary extends Shape
{
    /**
     * @param array{
     *     caseRuleArn: string,
     *     caseRuleId: string,
     *     description?: string|null,
     *     name: string,
     *     ruleType: 'Required'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
