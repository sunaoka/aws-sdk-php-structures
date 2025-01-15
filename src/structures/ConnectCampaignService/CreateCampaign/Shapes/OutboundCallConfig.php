<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectContactFlowId
 * @property string|null $connectSourcePhoneNumber
 * @property string|null $connectQueueId
 * @property AnswerMachineDetectionConfig|null $answerMachineDetectionConfig
 */
class OutboundCallConfig extends Shape
{
    /**
     * @param array{
     *     connectContactFlowId: string,
     *     connectSourcePhoneNumber?: string|null,
     *     connectQueueId?: string|null,
     *     answerMachineDetectionConfig?: AnswerMachineDetectionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
