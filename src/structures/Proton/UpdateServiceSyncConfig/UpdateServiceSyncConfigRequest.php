<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServiceSyncConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $branch
 * @property string $filePath
 * @property string $repositoryName
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $repositoryProvider
 * @property string $serviceName
 */
class UpdateServiceSyncConfigRequest extends Request
{
    /**
     * @param array{
     *     branch: string,
     *     filePath: string,
     *     repositoryName: string,
     *     repositoryProvider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET',
     *     serviceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
