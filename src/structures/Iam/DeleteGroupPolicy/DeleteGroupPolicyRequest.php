<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $PolicyName
 */
class DeleteGroupPolicyRequest extends Request
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
