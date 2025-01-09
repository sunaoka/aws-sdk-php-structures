<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $branch
 * @property string $name
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $provider
 */
class RepositoryBranch extends Shape
{
    /**
     * @param array{
     *     arn: string,
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
