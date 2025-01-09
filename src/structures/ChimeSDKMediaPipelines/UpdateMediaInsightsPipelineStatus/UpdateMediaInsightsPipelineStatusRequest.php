<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property 'Pause'|'Resume' $UpdateStatus
 */
class UpdateMediaInsightsPipelineStatusRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     UpdateStatus: 'Pause'|'Resume'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
