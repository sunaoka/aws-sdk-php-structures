<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListAnalyzableServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostname
 * @property string $ipAddress
 * @property string $source
 * @property string $vmId
 */
class AnalyzableServerSummary extends Shape
{
    /**
     * @param array{
     *     hostname?: string,
     *     ipAddress?: string,
     *     source?: string,
     *     vmId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
