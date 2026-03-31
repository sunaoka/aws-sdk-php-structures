<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $state
 * @property string|null $organizationName
 */
class GitHubIntegrationInput extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     state: string,
     *     organizationName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
