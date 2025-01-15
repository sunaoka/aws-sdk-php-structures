<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINUX'|'WINDOWS'|null $osType
 * @property string|null $vcenterConfigurationTimeStamp
 */
class VcenterBasedRemoteInfo extends Shape
{
    /**
     * @param array{
     *     osType?: 'LINUX'|'WINDOWS'|null,
     *     vcenterConfigurationTimeStamp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
