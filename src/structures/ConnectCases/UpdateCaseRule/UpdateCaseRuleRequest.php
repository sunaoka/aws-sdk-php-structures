<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $caseRuleId
 * @property string|null $name
 * @property string|null $description
 * @property Shapes\CaseRuleDetails|null $rule
 */
class UpdateCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseRuleId: string,
     *     name?: string|null,
     *     description?: string|null,
     *     rule?: Shapes\CaseRuleDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
