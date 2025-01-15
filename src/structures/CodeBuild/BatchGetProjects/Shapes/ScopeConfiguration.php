<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $domain
 * @property 'GITHUB_ORGANIZATION'|'GITHUB_GLOBAL'|'GITLAB_GROUP' $scope
 */
class ScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     domain?: string|null,
     *     scope: 'GITHUB_ORGANIZATION'|'GITHUB_GLOBAL'|'GITLAB_GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
