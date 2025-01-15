<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ExecuteChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeSetName
 * @property string|null $StackName
 * @property string|null $ClientRequestToken
 * @property bool|null $DisableRollback
 * @property bool|null $RetainExceptOnCreate
 */
class ExecuteChangeSetRequest extends Request
{
    /**
     * @param array{
     *     ChangeSetName: string,
     *     StackName?: string|null,
     *     ClientRequestToken?: string|null,
     *     DisableRollback?: bool|null,
     *     RetainExceptOnCreate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
