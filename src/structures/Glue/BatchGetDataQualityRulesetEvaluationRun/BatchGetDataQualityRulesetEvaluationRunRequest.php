<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDataQualityRulesetEvaluationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $RunIds
 */
class BatchGetDataQualityRulesetEvaluationRunRequest extends Request
{
    /**
     * @param array{RunIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
