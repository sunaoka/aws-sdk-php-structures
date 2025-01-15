<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RollbackStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $RoleARN
 * @property string|null $ClientRequestToken
 * @property bool|null $RetainExceptOnCreate
 */
class RollbackStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     RoleARN?: string|null,
     *     ClientRequestToken?: string|null,
     *     RetainExceptOnCreate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
