<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListAnalyzableServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $hostname
 * @property string|null $ipAddress
 * @property string|null $source
 * @property string|null $vmId
 */
class AnalyzableServerSummary extends Shape
{
    /**
     * @param array{
     *     hostname?: string|null,
     *     ipAddress?: string|null,
     *     source?: string|null,
     *     vmId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
