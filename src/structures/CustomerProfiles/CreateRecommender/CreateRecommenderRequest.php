<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommender;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderName
 * @property 'recommended-for-you'|'similar-items'|'frequently-paired-items'|'popular-items'|'trending-now' $RecommenderRecipeName
 * @property Shapes\RecommenderConfig|null $RecommenderConfig
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateRecommenderRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderName: string,
     *     RecommenderRecipeName: 'recommended-for-you'|'similar-items'|'frequently-paired-items'|'popular-items'|'trending-now',
     *     RecommenderConfig?: Shapes\RecommenderConfig|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
