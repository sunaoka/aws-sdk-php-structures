<?php

namespace Sunaoka\Aws\Structures\Athena\GetSessionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class GetSessionStatusRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
