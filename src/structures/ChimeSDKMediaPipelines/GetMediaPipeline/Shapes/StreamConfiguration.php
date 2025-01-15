<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property string|null $FragmentNumber
 * @property StreamChannelDefinition $StreamChannelDefinition
 */
class StreamConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamArn: string,
     *     FragmentNumber?: string|null,
     *     StreamChannelDefinition: StreamChannelDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
