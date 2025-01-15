<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetPortfolioSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WindowsServer'|'AmazonLinux'|'EndOfSupportWindowsServer'|'Redhat'|'Other'|null $ServerOsType
 * @property int|null $count
 */
class ServerSummary extends Shape
{
    /**
     * @param array{
     *     ServerOsType?: 'WindowsServer'|'AmazonLinux'|'EndOfSupportWindowsServer'|'Redhat'|'Other'|null,
     *     count?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
