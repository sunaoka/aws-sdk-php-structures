<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class GetAppRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
