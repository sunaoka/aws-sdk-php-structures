<?php

namespace Sunaoka\Aws\Structures\Proton\GetRepositorySyncStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $branch
 * @property string $repositoryName
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $repositoryProvider
 * @property 'TEMPLATE_SYNC'|'SERVICE_SYNC' $syncType
 */
class GetRepositorySyncStatusRequest extends Request
{
    /**
     * @param array{
     *     branch: string,
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
