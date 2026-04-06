<?php

namespace Sunaoka\Aws\Structures\Personalize\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $itemExplorationConfig
 * @property bool|null $enableMetadataWithRecommendations
 * @property bool|null $syncWithLatestSolutionVersion
 */
class CampaignConfig extends Shape
{
    /**
     * @param array{
     *     itemExplorationConfig?: array<string, string>|null,
     *     enableMetadataWithRecommendations?: bool|null,
     *     syncWithLatestSolutionVersion?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
