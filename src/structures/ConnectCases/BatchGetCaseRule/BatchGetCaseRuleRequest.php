<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property list<Shapes\CaseRuleIdentifier> $caseRules
 */
class BatchGetCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     caseRules: list<Shapes\CaseRuleIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
