<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LiveConnectorSourceConfiguration> $Sources
 * @property list<Shapes\LiveConnectorSinkConfiguration> $Sinks
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateMediaLiveConnectorPipelineRequest extends Request
{
    /**
     * @param array{
     *     Sources: list<Shapes\LiveConnectorSourceConfiguration>,
     *     Sinks: list<Shapes\LiveConnectorSinkConfiguration>,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
