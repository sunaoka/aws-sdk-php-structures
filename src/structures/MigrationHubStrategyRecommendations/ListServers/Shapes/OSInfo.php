<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINUX'|'WINDOWS'|null $type
 * @property string|null $version
 */
class OSInfo extends Shape
{
    /**
     * @param array{
     *     type?: 'LINUX'|'WINDOWS'|null,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
