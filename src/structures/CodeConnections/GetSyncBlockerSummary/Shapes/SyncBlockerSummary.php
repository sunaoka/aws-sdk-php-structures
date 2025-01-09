<?php

namespace Sunaoka\Aws\Structures\CodeConnections\GetSyncBlockerSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceName
 * @property string $ParentResourceName
 * @property list<SyncBlocker> $LatestBlockers
 */
class SyncBlockerSummary extends Shape
{
    /**
     * @param array{
     *     ResourceName: string,
     *     ParentResourceName?: string,
     *     LatestBlockers?: list<SyncBlocker>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
