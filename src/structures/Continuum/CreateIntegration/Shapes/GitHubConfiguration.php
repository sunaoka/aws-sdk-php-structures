<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubAuthorizationConfiguration $authorization
 * @property string|null $organizationName
 */
class GitHubConfiguration extends Shape
{
    /**
     * @param array{
     *     authorization: GitHubAuthorizationConfiguration,
     *     organizationName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
