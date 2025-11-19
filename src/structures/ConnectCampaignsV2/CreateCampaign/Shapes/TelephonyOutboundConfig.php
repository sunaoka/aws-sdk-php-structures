<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectContactFlowId
 * @property string|null $connectSourcePhoneNumber
 * @property AnswerMachineDetectionConfig|null $answerMachineDetectionConfig
 * @property int<15, 60>|null $ringTimeout
 */
class TelephonyOutboundConfig extends Shape
{
    /**
     * @param array{
     *     connectContactFlowId: string,
     *     connectSourcePhoneNumber?: string|null,
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig|null,
     *     ringTimeout?: int<15, 60>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
