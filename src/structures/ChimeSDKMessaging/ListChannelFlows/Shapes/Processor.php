<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ProcessorConfiguration $Configuration
 * @property int $ExecutionOrder
 * @property 'CONTINUE'|'ABORT' $FallbackAction
 */
class Processor extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration: ProcessorConfiguration,
     *     ExecutionOrder: int,
     *     FallbackAction: 'CONTINUE'|'ABORT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
