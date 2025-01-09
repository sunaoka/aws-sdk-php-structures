<?php

namespace Sunaoka\Aws\Structures\Proton\GetTemplateSyncStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branch
 * @property string $directory
 * @property string $repositoryName
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $repositoryProvider
 * @property string $sha
 */
class Revision extends Shape
{
    /**
     * @param array{
     *     branch: string,
     *     directory: string,
     *     repositoryName: string,
     *     repositoryProvider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET',
     *     sha: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
