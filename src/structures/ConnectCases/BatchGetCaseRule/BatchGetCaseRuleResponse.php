<?php

namespace Sunaoka\Aws\Structures\ConnectCases\BatchGetCaseRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\GetCaseRuleResponse> $caseRules
 * @property list<Shapes\CaseRuleError> $errors
 * @property list<string>|null $unprocessedCaseRules
 */
class BatchGetCaseRuleResponse extends Response
{
}
