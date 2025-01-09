<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RiskScore
 */
class VoiceSpoofingRisk extends Shape
{
    /**
     * @param array{RiskScore: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
