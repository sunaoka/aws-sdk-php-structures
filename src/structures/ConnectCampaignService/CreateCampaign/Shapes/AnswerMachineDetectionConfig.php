<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignService\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enableAnswerMachineDetection
 * @property bool|null $awaitAnswerMachinePrompt
 */
class AnswerMachineDetectionConfig extends Shape
{
    /**
     * @param array{
     *     enableAnswerMachineDetection: bool,
     *     awaitAnswerMachinePrompt?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
