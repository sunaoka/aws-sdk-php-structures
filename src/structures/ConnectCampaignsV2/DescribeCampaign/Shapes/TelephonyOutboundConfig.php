<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectContactFlowId
 * @property string|null $connectSourcePhoneNumber
 * @property AnswerMachineDetectionConfig|null $answerMachineDetectionConfig
 */
class TelephonyOutboundConfig extends Shape
{
    /**
     * @param array{
     *     connectContactFlowId: string,
     *     connectSourcePhoneNumber?: string|null,
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
