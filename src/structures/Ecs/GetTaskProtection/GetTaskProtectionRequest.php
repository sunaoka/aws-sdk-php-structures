<?php

namespace Sunaoka\Aws\Structures\Ecs\GetTaskProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string> $tasks
 */
class GetTaskProtectionRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     tasks?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
