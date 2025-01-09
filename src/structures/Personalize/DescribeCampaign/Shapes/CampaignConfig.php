<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $itemExplorationConfig
 * @property bool $enableMetadataWithRecommendations
 * @property bool $syncWithLatestSolutionVersion
 */
class CampaignConfig extends Shape
{
    /**
     * @param array{
     *     itemExplorationConfig?: array<string, string>,
     *     enableMetadataWithRecommendations?: bool,
     *     syncWithLatestSolutionVersion?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
