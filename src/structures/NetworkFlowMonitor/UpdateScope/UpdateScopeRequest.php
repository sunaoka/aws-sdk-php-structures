<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 * @property list<Shapes\TargetResource> $resourcesToAdd
 * @property list<Shapes\TargetResource> $resourcesToDelete
 */
class UpdateScopeRequest extends Request
{
    /**
     * @param array{
     *     scopeId: string,
     *     resourcesToAdd?: list<Shapes\TargetResource>,
     *     resourcesToDelete?: list<Shapes\TargetResource>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
