<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LiveConnectorSourceConfiguration> $Sources
 * @property list<Shapes\LiveConnectorSinkConfiguration> $Sinks
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMediaLiveConnectorPipelineRequest extends Request
{
    /**
     * @param array{
     *     Sources: list<Shapes\LiveConnectorSourceConfiguration>,
     *     Sinks: list<Shapes\LiveConnectorSinkConfiguration>,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
