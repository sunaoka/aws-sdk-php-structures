<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutExternalEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigRuleName
 * @property Shapes\ExternalEvaluation $ExternalEvaluation
 */
class PutExternalEvaluationRequest extends Request
{
    /**
     * @param array{
     *     ConfigRuleName: string,
     *     ExternalEvaluation: Shapes\ExternalEvaluation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
