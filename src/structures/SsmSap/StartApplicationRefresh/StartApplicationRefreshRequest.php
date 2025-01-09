<?php

namespace Sunaoka\Aws\Structures\SsmSap\StartApplicationRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 */
class StartApplicationRefreshRequest extends Request
{
    /**
     * @param array{ApplicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
