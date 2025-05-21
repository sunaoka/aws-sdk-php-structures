<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseRuleId
 * @property string|null $description
 * @property string $domainId
 * @property string|null $name
 * @property Shapes\CaseRuleDetails|null $rule
 */
class UpdateCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     caseRuleId: string,
     *     description?: string|null,
     *     domainId: string,
     *     name?: string|null,
     *     rule?: Shapes\CaseRuleDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
