<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignOutboundCallConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AnswerMachineDetectionConfig|null $answerMachineDetectionConfig
 * @property string|null $connectContactFlowId
 * @property string|null $connectSourcePhoneNumber
 * @property string $id
 */
class UpdateCampaignOutboundCallConfigRequest extends Request
{
    /**
     * @param array{
     *     answerMachineDetectionConfig?: Shapes\AnswerMachineDetectionConfig|null,
     *     connectContactFlowId?: string|null,
     *     connectSourcePhoneNumber?: string|null,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
