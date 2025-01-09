<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\CreateAppInstanceBot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'ALL'|'MENTIONS'|'NONE' $StandardMessages
 * @property 'ALL'|'NONE' $TargetedMessages
 */
class InvokedBy extends Shape
{
    /**
     * @param array{
     *     StandardMessages: 'AUTO'|'ALL'|'MENTIONS'|'NONE',
     *     TargetedMessages: 'ALL'|'NONE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
