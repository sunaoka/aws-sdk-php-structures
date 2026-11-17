<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $name
 * @property string $content
 * @property string $actorId
 * @property string|null $sessionId
 * @property array<string, string>|null $metadata
 * @property string|null $clientToken
 */
class CreateMemoryRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     name: string,
     *     content: string,
     *     actorId: string,
     *     sessionId?: string|null,
     *     metadata?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
