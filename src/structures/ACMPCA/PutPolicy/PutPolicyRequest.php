<?php

namespace Sunaoka\Aws\Structures\ACMPCA\PutPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $Policy
 */
class PutPolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
