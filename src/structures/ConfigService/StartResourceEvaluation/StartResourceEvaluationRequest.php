<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartResourceEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceDetails $ResourceDetails
 * @property Shapes\EvaluationContext $EvaluationContext
 * @property 'DETECTIVE'|'PROACTIVE' $EvaluationMode
 * @property int<0, 3600> $EvaluationTimeout
 * @property string $ClientToken
 */
class StartResourceEvaluationRequest extends Request
{
    /**
     * @param array{
     *     ResourceDetails: Shapes\ResourceDetails,
     *     EvaluationContext?: Shapes\EvaluationContext,
     *     EvaluationMode: 'DETECTIVE'|'PROACTIVE',
     *     EvaluationTimeout?: int<0, 3600>,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
