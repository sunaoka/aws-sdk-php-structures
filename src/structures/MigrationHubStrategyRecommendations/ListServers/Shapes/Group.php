<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExternalId'|'ExternalSourceType' $name
 * @property string $value
 */
class Group extends Shape
{
    /**
     * @param array{
     *     name?: 'ExternalId'|'ExternalSourceType',
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
