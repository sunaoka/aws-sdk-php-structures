<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetMediaInsightsPipelineConfigurationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
