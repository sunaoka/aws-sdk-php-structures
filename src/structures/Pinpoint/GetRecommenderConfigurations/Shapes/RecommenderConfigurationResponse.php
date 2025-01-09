<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetRecommenderConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $Attributes
 * @property string $CreationDate
 * @property string $Description
 * @property string $Id
 * @property string $LastModifiedDate
 * @property string $Name
 * @property string $RecommendationProviderIdType
 * @property string $RecommendationProviderRoleArn
 * @property string $RecommendationProviderUri
 * @property string $RecommendationTransformerUri
 * @property string $RecommendationsDisplayName
 * @property int $RecommendationsPerMessage
 */
class RecommenderConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     Attributes?: array<string, string>,
     *     CreationDate: string,
     *     Description?: string,
     *     Id: string,
     *     LastModifiedDate: string,
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
