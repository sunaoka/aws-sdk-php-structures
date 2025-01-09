<?php

namespace Sunaoka\Aws\Structures\VoiceID\EvaluateSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RiskThreshold
 * @property string $WatchlistId
 */
class FraudDetectionConfiguration extends Shape
{
    /**
     * @param array{
     *     RiskThreshold?: int,
     *     WatchlistId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
