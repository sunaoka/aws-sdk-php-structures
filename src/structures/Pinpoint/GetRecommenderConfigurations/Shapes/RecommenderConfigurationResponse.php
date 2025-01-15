<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Attributes
 * @property string $CreationDate
 * @property string|null $Description
 * @property string $Id
 * @property string $LastModifiedDate
 * @property string|null $Name
 * @property string|null $RecommendationProviderIdType
 * @property string $RecommendationProviderRoleArn
 * @property string $RecommendationProviderUri
 * @property string|null $RecommendationTransformerUri
 * @property string|null $RecommendationsDisplayName
 * @property int|null $RecommendationsPerMessage
 */
class RecommenderConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, string>|null,
     *     CreationDate: string,
     *     Description?: string|null,
     *     Id: string,
     *     LastModifiedDate: string,
     *     Name?: string|null,
     *     RecommendationProviderIdType?: string|null,
     *     RecommendationProviderRoleArn: string,
     *     RecommendationProviderUri: string,
     *     RecommendationTransformerUri?: string|null,
     *     RecommendationsDisplayName?: string|null,
     *     RecommendationsPerMessage?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
