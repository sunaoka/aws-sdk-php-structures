<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateScope;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scopeId
 * @property list<Shapes\TargetResource>|null $resourcesToAdd
 * @property list<Shapes\TargetResource>|null $resourcesToDelete
 */
class UpdateScopeRequest extends Request
{
    /**
     * @param array{
     *     scopeId: string,
     *     resourcesToAdd?: list<Shapes\TargetResource>|null,
     *     resourcesToDelete?: list<Shapes\TargetResource>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
