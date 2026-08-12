<?php

namespace Sunaoka\Aws\Structures\WellArchitected\CreateAgentContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $profileArn
 * @property string $title
 * @property 'APPLICATION' $contextType
 * @property Shapes\ContextContent $content
 */
class CreateAgentContextRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     profileArn: string,
     *     title: string,
     *     contextType: 'APPLICATION',
     *     content: Shapes\ContextContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
