<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\TerminateWorkspacesPoolSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class TerminateWorkspacesPoolSessionRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
