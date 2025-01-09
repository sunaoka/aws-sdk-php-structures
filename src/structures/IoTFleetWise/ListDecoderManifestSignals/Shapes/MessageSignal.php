<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestSignals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $topicName
 * @property StructuredMessage $structuredMessage
 */
class MessageSignal extends Shape
{
    /**
     * @param array{
     *     topicName: string,
     *     structuredMessage: StructuredMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
