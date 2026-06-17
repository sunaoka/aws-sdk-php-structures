<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GitHubIntegrationInput|null $github
 * @property GitLabIntegrationInput|null $gitlab
 * @property BitbucketIntegrationInput|null $bitbucket
 * @property ConfluenceIntegrationInput|null $confluence
 */
class ProviderInput extends Shape
{
    /**
     * @param array{
     *     github?: GitHubIntegrationInput|null,
     *     gitlab?: GitLabIntegrationInput|null,
     *     bitbucket?: BitbucketIntegrationInput|null,
     *     confluence?: ConfluenceIntegrationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
