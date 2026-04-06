<?php

namespace Sunaoka\Aws\Structures\Personalize\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $itemExplorationConfig
 * @property bool|null $enableMetadataWithRecommendations
 * @property bool|null $syncWithLatestSolutionVersion
 * @property array<'POPULARITY'|'FRESHNESS', double>|null $rankingInfluence
 */
class CampaignConfig extends Shape
{
    /**
     * @param array{
     *     itemExplorationConfig?: array<string, string>|null,
     *     enableMetadataWithRecommendations?: bool|null,
     *     syncWithLatestSolutionVersion?: bool|null,
     *     rankingInfluence?: array<'POPULARITY'|'FRESHNESS', double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
