<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ExecuteChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeSetName
 * @property string $StackName
 * @property string $ClientRequestToken
 * @property bool $DisableRollback
 * @property bool $RetainExceptOnCreate
 */
class ExecuteChangeSetRequest extends Request
{
    /**
     * @param array{
     *     ChangeSetName: string,
     *     StackName?: string,
     *     ClientRequestToken?: string,
     *     DisableRollback?: bool,
     *     RetainExceptOnCreate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
