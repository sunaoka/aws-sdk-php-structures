<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaStreamPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\MediaStreamSource> $Sources
 * @property list<Shapes\MediaStreamSink> $Sinks
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateMediaStreamPipelineRequest extends Request
{
    /**
     * @param array{
     *     Sources: list<Shapes\MediaStreamSource>,
     *     Sinks: list<Shapes\MediaStreamSink>,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
