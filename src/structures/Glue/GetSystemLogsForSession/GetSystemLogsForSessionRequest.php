<?php

namespace Sunaoka\Aws\Structures\Glue\GetSystemLogsForSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class GetSystemLogsForSessionRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
