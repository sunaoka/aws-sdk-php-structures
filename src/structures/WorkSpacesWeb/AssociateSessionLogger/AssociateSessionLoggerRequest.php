<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\AssociateSessionLogger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalArn
 * @property string $sessionLoggerArn
 */
class AssociateSessionLoggerRequest extends Request
{
    /**
     * @param array{
     *     portalArn: string,
     *     sessionLoggerArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
