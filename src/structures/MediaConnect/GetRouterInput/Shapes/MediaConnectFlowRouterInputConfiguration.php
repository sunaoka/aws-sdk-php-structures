<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlowArn
 * @property string|null $FlowOutputArn
 * @property FlowTransitEncryption $SourceTransitDecryption
 */
class MediaConnectFlowRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     FlowArn?: string|null,
     *     FlowOutputArn?: string|null,
     *     SourceTransitDecryption: FlowTransitEncryption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
