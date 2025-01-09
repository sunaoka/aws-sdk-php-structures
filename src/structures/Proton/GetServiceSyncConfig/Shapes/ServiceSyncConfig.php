<?php

namespace Sunaoka\Aws\Structures\Proton\GetServiceSyncConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branch
 * @property string $filePath
 * @property string $repositoryName
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $repositoryProvider
 * @property string $serviceName
 */
class ServiceSyncConfig extends Shape
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
