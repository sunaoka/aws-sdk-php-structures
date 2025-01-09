<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectContactFlowId
 * @property string $connectSourcePhoneNumber
 * @property AnswerMachineDetectionConfig $answerMachineDetectionConfig
 */
class TelephonyOutboundConfig extends Shape
{
    /**
     * @param array{
     *     connectContactFlowId: string,
     *     connectSourcePhoneNumber?: string,
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
