<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateRecommenderConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Attributes
 * @property string $Description
 * @property string $Name
 * @property string $RecommendationProviderIdType
 * @property string $RecommendationProviderRoleArn
 * @property string $RecommendationProviderUri
 * @property string $RecommendationTransformerUri
 * @property string $RecommendationsDisplayName
 * @property int $RecommendationsPerMessage
 */
class UpdateRecommenderConfiguration extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, string>,
     *     Description?: string,
     *     Name?: string,
     *     RecommendationProviderIdType?: string,
     *     RecommendationProviderRoleArn: string,
     *     RecommendationProviderUri: string,
     *     RecommendationTransformerUri?: string,
     *     RecommendationsDisplayName?: string,
     *     RecommendationsPerMessage?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
