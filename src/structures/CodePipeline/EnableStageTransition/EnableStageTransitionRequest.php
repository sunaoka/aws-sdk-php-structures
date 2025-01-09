<?php

namespace Sunaoka\Aws\Structures\CodePipeline\EnableStageTransition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $stageName
 * @property 'Inbound'|'Outbound' $transitionType
 */
class EnableStageTransitionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     stageName: string,
     *     transitionType: 'Inbound'|'Outbound'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
