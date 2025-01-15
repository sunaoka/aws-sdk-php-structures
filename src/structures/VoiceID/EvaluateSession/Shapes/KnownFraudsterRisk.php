<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GeneratedFraudsterId
 * @property int<0, 100> $RiskScore
 */
class KnownFraudsterRisk extends Shape
{
    /**
     * @param array{
     *     GeneratedFraudsterId?: string|null,
     *     RiskScore: int<0, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
