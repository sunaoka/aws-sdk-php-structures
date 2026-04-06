<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TargetResource> $targets
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateScopeRequest extends Request
{
    /**
     * @param array{
     *     targets: list<Shapes\TargetResource>,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
