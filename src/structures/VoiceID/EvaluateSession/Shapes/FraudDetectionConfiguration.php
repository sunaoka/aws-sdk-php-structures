<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100>|null $RiskThreshold
 * @property string|null $WatchlistId
 */
class FraudDetectionConfiguration extends Shape
{
    /**
     * @param array{
     *     RiskThreshold?: int<0, 100>|null,
     *     WatchlistId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
