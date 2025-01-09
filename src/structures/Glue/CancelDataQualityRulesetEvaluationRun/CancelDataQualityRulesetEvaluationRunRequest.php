<?php

namespace Sunaoka\Aws\Structures\Glue\CancelDataQualityRulesetEvaluationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RunId
 */
class CancelDataQualityRulesetEvaluationRunRequest extends Request
{
    /**
     * @param array{RunId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
