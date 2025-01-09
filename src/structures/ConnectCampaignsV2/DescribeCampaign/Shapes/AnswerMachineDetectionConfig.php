<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableAnswerMachineDetection
 * @property bool $awaitAnswerMachinePrompt
 */
class AnswerMachineDetectionConfig extends Shape
{
    /**
     * @param array{
     *     enableAnswerMachineDetection: bool,
     *     awaitAnswerMachinePrompt?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
