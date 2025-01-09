<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Expression $Filter
 * @property Shapes\RightsizingRecommendationConfiguration $Configuration
 * @property string $Service
 * @property int $PageSize
 * @property string $NextPageToken
 */
class GetRightsizingRecommendationRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\Expression,
     *     Configuration?: Shapes\RightsizingRecommendationConfiguration,
     *     Service: string,
     *     PageSize?: int,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
