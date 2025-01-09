<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironmentAccountConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $codebuildRoleArn
 * @property string $componentRoleArn
 * @property string $id
 * @property string $roleArn
 */
class UpdateEnvironmentAccountConnectionRequest extends Request
{
    /**
     * @param array{
     *     codebuildRoleArn?: string,
     *     componentRoleArn?: string,
     *     id: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
