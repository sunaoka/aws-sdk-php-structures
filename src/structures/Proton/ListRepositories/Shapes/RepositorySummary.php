<?php

namespace Sunaoka\Aws\Structures\Proton\ListRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $connectionArn
 * @property string $name
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $provider
 */
class RepositorySummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     connectionArn: string,
     *     name: string,
     *     provider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
