<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ListChannelFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property 'ASYNC' $InvocationType
 */
class LambdaConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     InvocationType: 'ASYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
