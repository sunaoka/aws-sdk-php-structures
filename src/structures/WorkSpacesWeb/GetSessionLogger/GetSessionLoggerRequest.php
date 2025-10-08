<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetSessionLogger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionLoggerArn
 */
class GetSessionLoggerRequest extends Request
{
    /**
     * @param array{sessionLoggerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
