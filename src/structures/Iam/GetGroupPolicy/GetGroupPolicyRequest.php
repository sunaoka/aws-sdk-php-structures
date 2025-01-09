<?php

namespace Sunaoka\Aws\Structures\Iam\GetGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $PolicyName
 */
class GetGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     PolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
