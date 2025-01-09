<?php

namespace Sunaoka\Aws\Structures\drs\DeleteSourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sourceServerID
 */
class DeleteSourceServerRequest extends Request
{
    /**
     * @param array{sourceServerID: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
