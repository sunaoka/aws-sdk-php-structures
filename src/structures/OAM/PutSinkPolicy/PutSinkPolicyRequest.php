<?php

namespace Sunaoka\Aws\Structures\OAM\PutSinkPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SinkIdentifier
 * @property string $Policy
 */
class PutSinkPolicyRequest extends Request
{
    /**
     * @param array{
     *     SinkIdentifier: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
