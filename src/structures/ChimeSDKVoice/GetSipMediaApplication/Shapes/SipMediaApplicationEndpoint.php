<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\GetSipMediaApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LambdaArn
 */
class SipMediaApplicationEndpoint extends Shape
{
    /**
     * @param array{LambdaArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
