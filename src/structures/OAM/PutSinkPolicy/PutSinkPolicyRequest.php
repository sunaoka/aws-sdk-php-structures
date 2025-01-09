<?php

namespace Sunaoka\Aws\Structures\OAM\PutSinkPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Policy
 * @property string $SinkIdentifier
 */
class PutSinkPolicyRequest extends Request
{
    /**
     * @param array{
     *     Policy: string,
     *     SinkIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
