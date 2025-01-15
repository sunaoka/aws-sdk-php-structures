<?php

namespace Sunaoka\Aws\Structures\Ecs\GetTaskProtection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property list<string>|null $tasks
 */
class GetTaskProtectionRequest extends Request
{
    /**
     * @param array{
     *     cluster: string,
     *     tasks?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
