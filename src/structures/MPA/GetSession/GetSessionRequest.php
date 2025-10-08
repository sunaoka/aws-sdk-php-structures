<?php

namespace Sunaoka\Aws\Structures\MPA\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionArn
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{SessionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
