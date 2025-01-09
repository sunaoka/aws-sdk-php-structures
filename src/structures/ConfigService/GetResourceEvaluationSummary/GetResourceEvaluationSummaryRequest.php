<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetResourceEvaluationSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceEvaluationId
 */
class GetResourceEvaluationSummaryRequest extends Request
{
    /**
     * @param array{ResourceEvaluationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
