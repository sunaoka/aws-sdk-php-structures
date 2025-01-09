<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RollbackStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $RoleARN
 * @property string $ClientRequestToken
 * @property bool $RetainExceptOnCreate
 */
class RollbackStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     RoleARN?: string,
     *     ClientRequestToken?: string,
     *     RetainExceptOnCreate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
