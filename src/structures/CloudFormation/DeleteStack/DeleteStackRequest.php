<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<string>|null $RetainResources
 * @property string|null $RoleARN
 * @property string|null $ClientRequestToken
 * @property 'STANDARD'|'FORCE_DELETE_STACK'|null $DeletionMode
 */
class DeleteStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     RetainResources?: list<string>|null,
     *     RoleARN?: string|null,
     *     ClientRequestToken?: string|null,
     *     DeletionMode?: 'STANDARD'|'FORCE_DELETE_STACK'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
