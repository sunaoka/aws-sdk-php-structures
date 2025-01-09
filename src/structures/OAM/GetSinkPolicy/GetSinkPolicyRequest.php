<?php

namespace Sunaoka\Aws\Structures\OAM\GetSinkPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SinkIdentifier
 */
class GetSinkPolicyRequest extends Request
{
    /**
     * @param array{SinkIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
