<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 * @property string $FragmentNumber
 * @property StreamChannelDefinition $StreamChannelDefinition
 */
class StreamConfiguration extends Shape
{
    /**
     * @param array{
     *     StreamArn: string,
     *     FragmentNumber?: string,
     *     StreamChannelDefinition: StreamChannelDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
