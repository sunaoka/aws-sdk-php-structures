<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property list<string> $RetainResources
 * @property string $RoleARN
 * @property string $ClientRequestToken
 * @property 'STANDARD'|'FORCE_DELETE_STACK' $DeletionMode
 */
class DeleteStackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     RetainResources?: list<string>,
     *     RoleARN?: string,
     *     ClientRequestToken?: string,
     *     DeletionMode?: 'STANDARD'|'FORCE_DELETE_STACK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
