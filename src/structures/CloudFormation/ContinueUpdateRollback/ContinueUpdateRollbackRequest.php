<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ContinueUpdateRollback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string $RoleARN
 * @property list<string> $ResourcesToSkip
 * @property string $ClientRequestToken
 */
class ContinueUpdateRollbackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     RoleARN?: string,
     *     ResourcesToSkip?: list<string>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
