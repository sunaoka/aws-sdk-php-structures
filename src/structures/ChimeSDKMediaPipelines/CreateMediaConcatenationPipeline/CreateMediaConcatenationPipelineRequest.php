<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaConcatenationPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConcatenationSource> $Sources
 * @property list<Shapes\ConcatenationSink> $Sinks
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateMediaConcatenationPipelineRequest extends Request
{
    /**
     * @param array{
     *     Sources: list<Shapes\ConcatenationSource>,
     *     Sinks: list<Shapes\ConcatenationSink>,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
