<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartResourceEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ResourceDetails $ResourceDetails
 * @property Shapes\EvaluationContext|null $EvaluationContext
 * @property 'DETECTIVE'|'PROACTIVE' $EvaluationMode
 * @property int<0, 3600>|null $EvaluationTimeout
 * @property string|null $ClientToken
 */
class StartResourceEvaluationRequest extends Request
{
    /**
     * @param array{
     *     ResourceDetails: Shapes\ResourceDetails,
     *     EvaluationContext?: Shapes\EvaluationContext|null,
     *     EvaluationMode: 'DETECTIVE'|'PROACTIVE',
     *     EvaluationTimeout?: int<0, 3600>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
