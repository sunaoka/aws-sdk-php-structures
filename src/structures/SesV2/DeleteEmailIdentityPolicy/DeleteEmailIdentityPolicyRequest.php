<?php

namespace Sunaoka\Aws\Structures\SesV2\DeleteEmailIdentityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property string $PolicyName
 */
class DeleteEmailIdentityPolicyRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     PolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
