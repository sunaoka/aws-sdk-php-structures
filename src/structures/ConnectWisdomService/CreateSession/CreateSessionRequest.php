<?php

namespace Sunaoka\Aws\Structures\ConnectWisdomService\CreateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property array<string, string> $tags
 */
class CreateSessionRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
