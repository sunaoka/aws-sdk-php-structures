<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DeleteChangeSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChangeSetName
 * @property string $StackName
 */
class DeleteChangeSetRequest extends Request
{
    /**
     * @param array{
     *     ChangeSetName: string,
     *     StackName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
