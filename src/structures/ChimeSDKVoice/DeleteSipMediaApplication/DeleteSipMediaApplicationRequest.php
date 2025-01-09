<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\DeleteSipMediaApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 */
class DeleteSipMediaApplicationRequest extends Request
{
    /**
     * @param array{SipMediaApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
