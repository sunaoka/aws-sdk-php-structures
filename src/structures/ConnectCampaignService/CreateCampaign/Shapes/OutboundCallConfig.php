<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AnswerMachineDetectionConfig|null $answerMachineDetectionConfig
 * @property string $connectContactFlowId
 * @property string $connectQueueId
 * @property string|null $connectSourcePhoneNumber
 */
class OutboundCallConfig extends Shape
{
    /**
     * @param array{
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig|null,
     *     connectContactFlowId: string,
     *     connectQueueId: string,
     *     connectSourcePhoneNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
