<?php

namespace Sunaoka\Aws\Structures\Chime\GetSipMediaApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 */
class GetSipMediaApplicationRequest extends Request
{
    /**
     * @param array{SipMediaApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
