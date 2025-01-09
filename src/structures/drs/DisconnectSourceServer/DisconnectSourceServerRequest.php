<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 */
class DisconnectSourceServerRequest extends Request
{
    /**
     * @param array{sourceServerID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
