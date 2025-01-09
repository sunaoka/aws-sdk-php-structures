<?php

namespace Sunaoka\Aws\Structures\Ssm\ResumeSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 */
class ResumeSessionRequest extends Request
{
    /**
     * @param array{SessionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
