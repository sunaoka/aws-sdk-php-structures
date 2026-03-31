<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubIntegrationInput|null $github
 */
class ProviderInput extends Shape
{
    /**
     * @param array{github?: GitHubIntegrationInput|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
