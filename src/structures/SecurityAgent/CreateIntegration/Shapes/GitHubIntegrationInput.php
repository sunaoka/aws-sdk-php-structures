<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $code
 * @property string $state
 * @property string|null $organizationName
 * @property string|null $targetUrl
 * @property string|null $installationId
 */
class GitHubIntegrationInput extends Shape
{
    /**
     * @param array{
     *     code: string,
     *     state: string,
     *     organizationName?: string|null,
     *     targetUrl?: string|null,
     *     installationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
