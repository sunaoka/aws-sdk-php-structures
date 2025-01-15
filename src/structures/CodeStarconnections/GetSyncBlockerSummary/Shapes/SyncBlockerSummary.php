<?php

namespace Sunaoka\Aws\Structures\CodeStarconnections\GetSyncBlockerSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceName
 * @property string|null $ParentResourceName
 * @property list<SyncBlocker>|null $LatestBlockers
 */
class SyncBlockerSummary extends Shape
{
    /**
     * @param array{
     *     ResourceName: string,
     *     ParentResourceName?: string|null,
     *     LatestBlockers?: list<SyncBlocker>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
