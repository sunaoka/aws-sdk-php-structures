<?php

namespace Sunaoka\Aws\Structures\Proton\GetTemplateSyncConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branch
 * @property string $repositoryName
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $repositoryProvider
 * @property string $subdirectory
 * @property string $templateName
 * @property 'ENVIRONMENT'|'SERVICE' $templateType
 */
class TemplateSyncConfig extends Shape
{
    /**
     * @param array{
     *     branch: string,
     *     repositoryName: string,
     *     repositoryProvider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET',
     *     subdirectory?: string,
     *     templateName: string,
     *     templateType: 'ENVIRONMENT'|'SERVICE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
