<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\DisassociateSessionLogger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 */
class DisassociateSessionLoggerRequest extends Request
{
    /**
     * @param array{portalArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
