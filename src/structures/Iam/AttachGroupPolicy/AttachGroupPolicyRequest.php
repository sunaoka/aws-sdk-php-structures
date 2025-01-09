<?php

namespace Sunaoka\Aws\Structures\Iam\AttachGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $PolicyArn
 */
class AttachGroupPolicyRequest extends Request
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
