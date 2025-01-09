<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironmentAccountConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $codebuildRoleArn
 * @property string $componentRoleArn
 * @property string $environmentName
 * @property string $managementAccountId
 * @property string $roleArn
 * @property list<Shapes\Tag> $tags
 */
class CreateEnvironmentAccountConnectionRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     codebuildRoleArn?: string,
     *     componentRoleArn?: string,
     *     environmentName: string,
     *     managementAccountId: string,
     *     roleArn?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
