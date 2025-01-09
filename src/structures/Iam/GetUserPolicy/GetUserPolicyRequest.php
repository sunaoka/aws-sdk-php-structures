<?php

namespace Sunaoka\Aws\Structures\Iam\GetUserPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $PolicyName
 */
class GetUserPolicyRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     PolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
