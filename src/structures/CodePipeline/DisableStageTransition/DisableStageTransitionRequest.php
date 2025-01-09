<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DisableStageTransition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $stageName
 * @property 'Inbound'|'Outbound' $transitionType
 * @property string $reason
 */
class DisableStageTransitionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     stageName: string,
     *     transitionType: 'Inbound'|'Outbound',
     *     reason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
