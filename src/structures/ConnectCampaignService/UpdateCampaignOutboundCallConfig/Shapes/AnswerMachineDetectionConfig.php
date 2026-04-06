<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\UpdateCampaignOutboundCallConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableAnswerMachineDetection
 */
class AnswerMachineDetectionConfig extends Shape
{
    /**
     * @param array{enableAnswerMachineDetection: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
