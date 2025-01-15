<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\StartRecommendationReportGeneration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExternalId'|'ExternalSourceType'|null $name
 * @property string|null $value
 */
class Group extends Shape
{
    /**
     * @param array{
     *     name?: 'ExternalId'|'ExternalSourceType'|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
