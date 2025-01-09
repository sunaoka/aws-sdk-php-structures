<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\CancelResourceRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RequestToken
 */
class CancelResourceRequestRequest extends Request
{
    /**
     * @param array{RequestToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
