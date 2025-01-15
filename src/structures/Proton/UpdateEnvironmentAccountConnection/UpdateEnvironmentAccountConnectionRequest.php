<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateEnvironmentAccountConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $codebuildRoleArn
 * @property string|null $componentRoleArn
 * @property string $id
 * @property string|null $roleArn
 */
class UpdateEnvironmentAccountConnectionRequest extends Request
{
    /**
     * @param array{
     *     codebuildRoleArn?: string|null,
     *     componentRoleArn?: string|null,
     *     id: string,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
