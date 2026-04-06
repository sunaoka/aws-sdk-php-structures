<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetRightsizingRecommendation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Expression|null $Filter
 * @property Shapes\RightsizingRecommendationConfiguration|null $Configuration
 * @property string $Service
 * @property int<0, 6000>|null $PageSize
 * @property string|null $NextPageToken
 */
class GetRightsizingRecommendationRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\Expression|null,
     *     Configuration?: Shapes\RightsizingRecommendationConfiguration|null,
     *     Service: string,
     *     PageSize?: int<0, 6000>|null,
     *     NextPageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
