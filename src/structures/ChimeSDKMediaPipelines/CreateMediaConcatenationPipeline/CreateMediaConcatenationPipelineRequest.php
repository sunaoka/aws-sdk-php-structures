<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaConcatenationPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ConcatenationSource> $Sources
 * @property list<Shapes\ConcatenationSink> $Sinks
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMediaConcatenationPipelineRequest extends Request
{
    /**
     * @param array{
     *     Sources: list<Shapes\ConcatenationSource>,
     *     Sinks: list<Shapes\ConcatenationSink>,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
