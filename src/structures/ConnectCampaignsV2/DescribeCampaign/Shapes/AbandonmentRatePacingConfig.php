<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $targetRate
 * @property 'CONNECTED_TO_SYSTEM'|'GREETING_START'|'GREETING_END' $connectionStartPoint
 * @property int<1, max> $connectionThresholdSeconds
 * @property string $evaluationWindow
 */
class AbandonmentRatePacingConfig extends Shape
{
    /**
     * @param array{
     *     targetRate: double,
     *     connectionStartPoint: 'CONNECTED_TO_SYSTEM'|'GREETING_START'|'GREETING_END',
     *     connectionThresholdSeconds: int<1, max>,
     *     evaluationWindow: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
