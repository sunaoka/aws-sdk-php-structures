<?php

namespace Sunaoka\Aws\Structures\Iam\DetachUserPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $PolicyArn
 */
class DetachUserPolicyRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     PolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
