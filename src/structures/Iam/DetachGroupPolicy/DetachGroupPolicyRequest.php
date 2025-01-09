<?php

namespace Sunaoka\Aws\Structures\Iam\DetachGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $PolicyArn
 */
class DetachGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     PolicyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
