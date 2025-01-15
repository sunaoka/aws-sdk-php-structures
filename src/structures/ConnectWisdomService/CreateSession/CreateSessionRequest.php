<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $name
 * @property array<string, string>|null $tags
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     clientToken?: string|null,
     *     description?: string|null,
     *     name: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
