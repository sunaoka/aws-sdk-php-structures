<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\GetResourceRequestStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RequestToken
 */
class GetResourceRequestStatusRequest extends Request
{
    /**
     * @param array{RequestToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
