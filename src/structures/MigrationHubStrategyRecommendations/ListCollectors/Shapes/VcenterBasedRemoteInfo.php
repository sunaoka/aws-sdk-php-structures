<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINUX'|'WINDOWS' $osType
 * @property string $vcenterConfigurationTimeStamp
 */
class VcenterBasedRemoteInfo extends Shape
{
    /**
     * @param array{
     *     osType?: 'LINUX'|'WINDOWS',
     *     vcenterConfigurationTimeStamp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
