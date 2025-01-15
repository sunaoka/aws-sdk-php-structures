<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdateSipMediaApplicationCall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransactionId
 */
class SipMediaApplicationCall extends Shape
{
    /**
     * @param array{TransactionId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
