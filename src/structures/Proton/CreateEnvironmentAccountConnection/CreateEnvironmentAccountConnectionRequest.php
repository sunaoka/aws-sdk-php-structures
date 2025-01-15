<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentAccountConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $codebuildRoleArn
 * @property string|null $componentRoleArn
 * @property string $environmentName
 * @property string $managementAccountId
 * @property string|null $roleArn
 * @property list<Shapes\Tag>|null $tags
 */
class CreateEnvironmentAccountConnectionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     codebuildRoleArn?: string|null,
     *     componentRoleArn?: string|null,
     *     environmentName: string,
     *     managementAccountId: string,
     *     roleArn?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
