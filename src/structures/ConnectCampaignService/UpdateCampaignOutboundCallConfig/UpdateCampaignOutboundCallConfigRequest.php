<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignOutboundCallConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $connectContactFlowId
 * @property string $connectSourcePhoneNumber
 * @property Shapes\AnswerMachineDetectionConfig $answerMachineDetectionConfig
 */
class UpdateCampaignOutboundCallConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     connectContactFlowId?: string,
     *     connectSourcePhoneNumber?: string,
     *     answerMachineDetectionConfig?: Shapes\AnswerMachineDetectionConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
