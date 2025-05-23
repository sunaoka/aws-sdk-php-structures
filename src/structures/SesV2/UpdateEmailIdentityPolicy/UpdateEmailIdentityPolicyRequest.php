<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateEmailIdentityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string $PolicyName
 * @property string $Policy
 */
class UpdateEmailIdentityPolicyRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     PolicyName: string,
     *     Policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
