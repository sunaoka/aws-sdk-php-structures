<?php

namespace Sunaoka\Aws\Structures\Proton\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branch
 * @property string $name
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $provider
 */
class RepositoryBranchInput extends Shape
{
    /**
     * @param array{
     *     branch: string,
     *     name: string,
     *     provider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
