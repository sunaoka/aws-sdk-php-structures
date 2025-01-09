<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $RiskScore
 */
class VoiceSpoofingRisk extends Shape
{
    /**
     * @param array{RiskScore: int<0, 100>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
