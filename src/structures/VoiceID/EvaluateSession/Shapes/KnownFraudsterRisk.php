<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GeneratedFraudsterId
 * @property int $RiskScore
 */
class KnownFraudsterRisk extends Shape
{
    /**
     * @param array{
     *     GeneratedFraudsterId?: string,
     *     RiskScore: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
