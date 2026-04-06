<?php

namespace Sunaoka\Aws\Structures\S3Control\DeleteAccessGrantsInstanceResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class DeleteAccessGrantsInstanceResourcePolicyRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
