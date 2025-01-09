<?php

namespace Sunaoka\Aws\Structures\Iam\PutGroupPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $PolicyName
 * @property string $PolicyDocument
 */
class PutGroupPolicyRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     PolicyName: string,
     *     PolicyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
