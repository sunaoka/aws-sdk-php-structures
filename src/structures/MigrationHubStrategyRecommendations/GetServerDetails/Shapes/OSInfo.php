<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LINUX'|'WINDOWS' $type
 * @property string $version
 */
class OSInfo extends Shape
{
    /**
     * @param array{
     *     type?: 'LINUX'|'WINDOWS',
     *     version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
