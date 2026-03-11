<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateRecommenderFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $RecommenderFilterName
 * @property string $RecommenderFilterExpression
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateRecommenderFilterRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     RecommenderFilterName: string,
     *     RecommenderFilterExpression: string,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
