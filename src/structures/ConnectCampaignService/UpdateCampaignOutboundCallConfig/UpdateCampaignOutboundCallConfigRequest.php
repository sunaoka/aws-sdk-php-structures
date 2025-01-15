<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignOutboundCallConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string|null $connectContactFlowId
 * @property string|null $connectSourcePhoneNumber
 * @property Shapes\AnswerMachineDetectionConfig|null $answerMachineDetectionConfig
 */
class UpdateCampaignOutboundCallConfigRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     connectContactFlowId?: string|null,
     *     connectSourcePhoneNumber?: string|null,
     *     answerMachineDetectionConfig?: Shapes\AnswerMachineDetectionConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
