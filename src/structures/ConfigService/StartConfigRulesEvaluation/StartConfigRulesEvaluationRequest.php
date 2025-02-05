<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartConfigRulesEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ConfigRuleNames
 */
class StartConfigRulesEvaluationRequest extends Request
{
    /**
     * @param array{ConfigRuleNames?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
