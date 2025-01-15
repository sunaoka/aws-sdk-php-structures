<?php

namespace Sunaoka\Aws\Structures\Proton\ListRepositorySyncDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property string $repositoryName
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $repositoryProvider
 * @property 'TEMPLATE_SYNC'|'SERVICE_SYNC' $syncType
 */
class ListRepositorySyncDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     repositoryName: string,
     *     repositoryProvider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET',
     *     syncType: 'TEMPLATE_SYNC'|'SERVICE_SYNC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
