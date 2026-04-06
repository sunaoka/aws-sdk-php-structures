<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreatePrivateConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\PrivateConnectionMode $mode
 * @property array<string, string>|null $tags
 */
class CreatePrivateConnectionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     mode: Shapes\PrivateConnectionMode,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
