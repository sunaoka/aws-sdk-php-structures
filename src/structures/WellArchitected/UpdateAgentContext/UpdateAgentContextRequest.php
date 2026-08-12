<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateAgentContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $profileArn
 * @property string $id
 * @property string|null $title
 * @property Shapes\ContextContent|null $content
 */
class UpdateAgentContextRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     profileArn: string,
     *     id: string,
     *     title?: string|null,
     *     content?: Shapes\ContextContent|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
