<?php

namespace Sunaoka\Aws\Structures\Athena\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
