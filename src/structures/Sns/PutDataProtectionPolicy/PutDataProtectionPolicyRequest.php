<?php

namespace Sunaoka\Aws\Structures\Sns\PutDataProtectionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property string $DataProtectionPolicy
 */
class PutDataProtectionPolicyRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     DataProtectionPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
