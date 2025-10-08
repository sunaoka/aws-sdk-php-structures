<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DeleteSessionLogger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sessionLoggerArn
 */
class DeleteSessionLoggerRequest extends Request
{
    /**
     * @param array{sessionLoggerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
