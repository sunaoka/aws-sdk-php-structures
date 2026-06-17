<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessToken
 * @property string|null $targetUrl
 * @property 'PERSONAL'|'GROUP' $tokenType
 * @property string|null $groupId
 */
class GitLabIntegrationInput extends Shape
{
    /**
     * @param array{
     *     accessToken: string,
     *     targetUrl?: string|null,
     *     tokenType: 'PERSONAL'|'GROUP',
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
