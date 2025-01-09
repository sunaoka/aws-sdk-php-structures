<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityRulesetEvaluationRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RunId
 */
class GetDataQualityRulesetEvaluationRunRequest extends Request
{
    /**
     * @param array{RunId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
