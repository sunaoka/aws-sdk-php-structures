<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TargetResource> $targets
 * @property string $clientToken
 * @property array<string, string> $tags
 */
class CreateScopeRequest extends Request
{
    /**
     * @param array{
     *     targets: list<Shapes\TargetResource>,
     *     clientToken?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
