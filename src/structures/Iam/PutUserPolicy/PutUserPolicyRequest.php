<?php

namespace Sunaoka\Aws\Structures\Iam\PutUserPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $PolicyName
 * @property string $PolicyDocument
 */
class PutUserPolicyRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     PolicyName: string,
     *     PolicyDocument: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
