<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectContactFlowId
 * @property string $connectSourcePhoneNumber
 * @property string $connectQueueId
 * @property AnswerMachineDetectionConfig $answerMachineDetectionConfig
 */
class OutboundCallConfig extends Shape
{
    /**
     * @param array{
     *     connectContactFlowId: string,
     *     connectSourcePhoneNumber?: string,
     *     connectQueueId?: string,
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
