<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KnownFraudsterRisk $KnownFraudsterRisk
 * @property VoiceSpoofingRisk $VoiceSpoofingRisk
 */
class FraudRiskDetails extends Shape
{
    /**
     * @param array{
     *     KnownFraudsterRisk: KnownFraudsterRisk,
     *     VoiceSpoofingRisk: VoiceSpoofingRisk
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
