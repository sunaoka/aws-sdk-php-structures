<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\CaseRuleIdentifier> $caseRules
 * @property string $domainId
 */
class BatchGetCaseRuleRequest extends Request
{
    /**
     * @param array{
     *     caseRules: list<Shapes\CaseRuleIdentifier>,
     *     domainId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
