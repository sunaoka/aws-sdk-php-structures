<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property ProcessorConfiguration $Configuration
 * @property int<1, 3> $ExecutionOrder
 * @property 'CONTINUE'|'ABORT' $FallbackAction
 */
class Processor extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Configuration: ProcessorConfiguration,
     *     ExecutionOrder: int<1, 3>,
     *     FallbackAction: 'CONTINUE'|'ABORT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
