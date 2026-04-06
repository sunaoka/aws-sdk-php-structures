<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaStreamPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MediaStreamSource> $Sources
 * @property list<Shapes\MediaStreamSink> $Sinks
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMediaStreamPipelineRequest extends Request
{
    /**
     * @param array{
     *     Sources: list<Shapes\MediaStreamSource>,
     *     Sinks: list<Shapes\MediaStreamSink>,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
