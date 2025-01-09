<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\DeleteMediaInsightsPipelineConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteMediaInsightsPipelineConfigurationRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
