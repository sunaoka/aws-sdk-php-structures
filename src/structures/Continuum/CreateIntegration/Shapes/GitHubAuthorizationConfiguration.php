<?php

namespace Sunaoka\Aws\Structures\Continuum\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizationCode
 * @property string $state
 * @property string|null $redirectUrl
 */
class GitHubAuthorizationConfiguration extends Shape
{
    /**
     * @param array{
     *     authorizationCode: string,
     *     state: string,
     *     redirectUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
