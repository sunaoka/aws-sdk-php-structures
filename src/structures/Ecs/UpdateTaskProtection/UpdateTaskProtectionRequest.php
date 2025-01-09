<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateTaskProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $tasks
 * @property bool $protectionEnabled
 * @property int $expiresInMinutes
 */
class UpdateTaskProtectionRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     tasks: list<string>,
     *     protectionEnabled: bool,
     *     expiresInMinutes?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
