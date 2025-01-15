<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ContinueUpdateRollback;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackName
 * @property string|null $RoleARN
 * @property list<string>|null $ResourcesToSkip
 * @property string|null $ClientRequestToken
 */
class ContinueUpdateRollbackRequest extends Request
{
    /**
     * @param array{
     *     StackName: string,
     *     RoleARN?: string|null,
     *     ResourcesToSkip?: list<string>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
